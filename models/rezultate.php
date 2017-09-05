<?php

class Rezultate extends CI_Model 
{

  var $similare;
  var $procent=30;
  var $anunt;
  var $analiza;
  var $cale='assets/images/grafice/';
  var $rezervate;
  var $localitati;
  var $judete;
  var $greutati;
  var $filtre;
  var $conditie;

  function __construct()
  {
    parent::__construct();
    //$this->output->enable_profiler(TRUE);
    
    $this->mysql=$this->load->database('mysql',TRUE);
    $this->sphinx=$this->load->database('sphinx',TRUE);
    $CI =& get_instance();
    $CI->mysql =& $this->mysql;  
    $CI->sphinx =& $this->sphinx;  
    
    $this->extrage_cuvinte_rezervate();
    $this->greutati=$this->citeste_greutatile();
    $this->filtre=$this->descarca_filtre();
    $this->conditie=$this->descarca_coloane_conditie();
//    $this->sphinx->cache_on();
  }

  function extrage_cuvinte_rezervate()
  {
    $q_rezervate=$this->mysql->get('cuvinte_rezervate');
    $this->rezervate=$q_rezervate->result_array();
  }
    
  function cauta($pagina_curenta, $cauta_text, $analiza)
  {
    if ($pagina_curenta==1)
    {
      $offset=0;
    } else {
      $offset=$pagina_curenta;
    }
    //$analiza=$this->analizeaza_cautarea($cauta_text);
    $q_analiza=$this->sphinx->select('*',FALSE);
    $q_analiza=$this->compune_conditia($q_analiza, $analiza);
    $q_analiza=$this->sphinx->order_by('data', 'DESC');
    $q_analiza=$this->sphinx->limit(10, $offset<2 ? $offset*10 : ($offset-1)*10);
    $q_analiza=$this->sphinx->option('max_matches=1000');
    $q_analiza=$this->sphinx->get('anunturi');
    //echo $this->sphinx->last_query();
    $rezultate=$q_analiza->result_array();
    //print_r($rezultate);
    $similar=$this->cauta_similar($rezultate);
    $final=$this->numara_comentarii($similar);
    return $final;
  }
  
  function compune_conditia(&$query, $analiza)
  {
    $_query='';
    $or='';
//    $greutati=$this->citeste_greutatile();
    //print_r($analiza);
    foreach ($analiza as $cheie => $like)
    {
//      print_r($like);	
//      $operator=array_search($like['coloana'], $this->greutati);
/*      if ($like['coloana']=='suprafata')
      {
        $query=$this->sphinx->where($like['inlocuitor'],NULL,FALSE);
      }
  */    
      foreach ($this->conditie as $greutate)
      {
        if ($greutate['coloana']==$like['coloana']) $operator=$greutate['operator'];
//        echo '<br />greutate_operator: '.$greutate['operator'].'<br />operator: '.$operator.'<br />like_coloana: '.$like['coloana'].'<br />greutate_coloana: '.$greutate['coloana'];
      }
//      print_r($this->greutati);
//      echo '<br />operator: '.$operator.' coloana: '.$like['coloana'].' cuvant: '.$like['cuvant'].' or: '.$or;
      if ($operator==='MATCH')
      {
        if (empty($or)===TRUE)
        {
          if ($like['coloana']!=$analiza[$cheie+1]['coloana'])
          {
            $_query.=' @'.$like['coloana'].' "'.$like['cuvant'].'" ';
            $or=$like['coloana'];
          }
          else
          {
            $_query.=' @'.$like['coloana'].' ("'.$like['cuvant'].'" ';
            $or=$like['coloana'];
          }
        }
        else
        {
          if ($like['coloana']==$or)
          {
            if ($like['coloana']!=$analiza[$cheie+1]['coloana'])
            {
              $_query.=' | "'.$like['cuvant'].'")';
              $or=$like['coloana'];
            }
            else
            {
              $_query.=' | "'.$like['cuvant'].'" ';
              $or=$like['coloana'];
            }
          }
          else
          {
            if ($like['coloana']!=$analiza[$cheie+1]['coloana'])
            {
              $_query.=' @'.$like['coloana'].' "'.$like['cuvant'].'" ';
              $or=$like['coloana'];
            }
            else  
            {
              $_query.=' @'.$like['coloana'].' ("'.$like['cuvant'].'" ';
              $or=$like['coloana'];
            }
          }
        }
      }
      elseif ($operator==='LIKE')
      {
        if (isset($or)===FALSE)
        {
          if ($like['coloana']!=$analiza[$cheie+1]['coloana'])
          {
            $query=$this->sphinx->where($like['coloana'].' LIKE "%'.$like['cuvant'].'%"', NULL, FALSE);
            $or=$like['coloana'];
          }
          else
          {
            $query=$this->sphinx->where('('.$like['coloana'].' LIKE "%'.$like['cuvant'].'%"', NULL, FALSE);
            $or=$like['coloana'];
          }
        }
        else
        {
          if ($like['coloana']==$or)
          {
            if ($like['coloana']!=$analiza[$cheie+1]['coloana'])
            {
            $query=$this->sphinx->or_where($like['coloana'].' LIKE "%'.$like['cuvant'].'%")', NULL, FALSE);
            $or=$like['coloana'];
            }
            else
            {
            $query=$this->sphinx->or_where($like['coloana'].' LIKE "%'.$like['cuvant'].'%"', NULL, FALSE);
            $or=$like['coloana'];
            }
          }
          else
          {
            if ($like['coloana']!=$analiza[$cheie+1]['coloana'])
            {
            $query=$this->sphinx->where($like['coloana'].' LIKE "%'.$like['cuvant'].'%"', NULL, FALSE);
            $or=$like['coloana'];
            }
            else  
            {
            $query=$this->sphinx->where('('.$like['coloana'].' LIKE "%'.$like['cuvant'].'%"', NULL, FALSE);
            $or=$like['coloana'];
            }
          }
        }
      }
      elseif ($operator==='COMPARISON')
      {
//        echo 'merge COMPARISON';
        if (isset($or)===FALSE)
        {
//          echo 'FALSE';
          if ($like['coloana']!=$analiza[$cheie+1]['coloana'])
          {
            $query=$this->sphinx->where($like['filtru'], NULL, FALSE);
            $or=$like['coloana'];
//            echo '1';
          }
          else
          {
            $query=$this->sphinx->where('('.$like['filtru'], NULL, FALSE);
            $or=$like['coloana'];
//            echo '2';
          }
        }
        else
        {
//          echo 'TRUE';
          if ($like['coloana']==$or)
          {
            if ($like['coloana']!=$analiza[$cheie+1]['coloana'])
            {
            $query=$this->sphinx->or_where($like['filtru'].')', NULL, FALSE);
            $or=$like['coloana'];
//            echo '3';
            }
            else
            {
            $query=$this->sphinx->or_where($like['filtru'], NULL, FALSE);
            $or=$like['coloana'];
//            echo '4';
            }
          }
          else
          {
//          echo 'merge';
            if ($like['coloana']!=$analiza[$cheie+1]['coloana'])
            {
            $query=$this->sphinx->where($like['filtru'], NULL, FALSE);
//            echo $like['filtru'].' filtru/coloana '.$like['coloana'];
            $or=$like['coloana'];
//            echo '5';
            }
            else  
            {
            $query=$this->sphinx->where('('.$like['filtru'], NULL, FALSE);
            $or=$like['coloana'];
//            echo '6';
            }
          }
        }
      }
    }
//    echo $_query;
    $query=$this->sphinx->where('MATCH(\''.$_query.'\')',NULL,FALSE);
    //print_r($query);
    //echo $_query;
    return $query;
  }
  
  function total_anunturi()
  {
    $_rezultat=$this->sphinx->select('COUNT(*) AS total');
    $_rezultat=$this->sphinx->get('anunturi');
    $rezultat=$_rezultat->row_array();
    return $rezultat;
  }
  
  function verifica_contact($contact)
  {
    $_rezultat=$this->sphinx->select('COUNT(*) as contor');
    $_rezultat=$this->sphinx->where('MATCH (\'@contact "'.$contact.'"\')', NULL, FALSE);
    $_rezultat=$this->sphinx->get('anunturi');
    $rezultat=$_rezultat->row_array();
    return $rezultat['contor'];
  }
  
  function verifica_anunt_id($anunt_id)
  {
    $this->mysql->where('anunt_id',$anunt_id);
    $this->mysql->from('anunturi');
    return $this->mysql->count_all_results();
  }
  
  function cauta_cuvinte_rezervate($cuvant)
  {
    foreach ($this->rezervate as $cheie => $rezervat)
    {
//      echo $cuvant.','.$rezervat['cuvant'].'<br />';
      if ($rezervat['cuvant']==$cuvant) return $rezervat['inlocuitor'];
    }
    return FALSE;
  }
  
  function numara_comentarii($rezultate)
  {
    foreach ($rezultate as $cheie => $rezultat)
    {
      $_comentarii=$this->mysql->select('count(id) as count');
      $_comentarii=$this->mysql->where('anunt_id', $rezultat['anunt_id']);
      $_comentarii=$this->mysql->get('comentarii');
      $comentarii=$_comentarii->row()->count;
      if ($comentarii>0)
      {
        $rezultate[$cheie]['comentarii']=$_comentarii->row()->count.' comentarii';
      }
      else
      {
        $rezultate[$cheie]['comentarii']='Comenteaza!';
      }
    }
    return $rezultate;
  }
  
  function stocheaza_jurnal($cauta_text)
  {
    $arr=array('cautare' => $cauta_text, 'adresa' => $this->session->userdata('ip_address'), 'url' => uri_query_string());
    $this->mysql->insert('jurnal', $arr);
  }

/*  
  function compara_localitati($coloana, $coloana2, $cauta)
  {
    $q_localitati=$this->mysql->select($coloana.', COUNT('.$coloana.')');
    //$q_localitati=$this->sphinx->select($coloana2.', COUNT(*) AS cnt');
    $q_localitati=$this->mysql->where('MATCH ('.$coloana.') AGAINST (\''.$cauta.'\' IN BOOLEAN MODE)', NULL, FALSE);
    //$q_localitati=$this->sphinx->where('MATCH (\'@'.$coloana2.' ("'.$cauta.'")\')', NULL, FALSE);
    $q_localitati=$this->mysql->group_by($coloana);
    //$q_localitati=$this->sphinx->group_by($coloana2);
    $q_localitati=$this->mysql->order_by('COUNT('.$coloana.')','DESC');
    //$q_localitati=$this->sphinx->order_by('cnt','DESC');
    $q_localitati=$this->mysql->get('anunturi');
    //$q_localitati=$this->sphinx->get('anunturi');
    $localitati=$q_localitati->result_array();
    foreach ($localitati as $cheie => $localitate)
    {
      $localitati[$cheie][$coloana2]=$localitate[str_replace('anunturi.','',$coloana)];
//      unset($localitati[$cheie][str_replace('anunturi.','',$coloana)]);
    }
    ksort($localitati);
    //print_r($localitati);
    echo $this->mysql->last_query().'<br /><br />';
    return $localitati;
  }
*/
  
  function descarca_coloane_cautare()
  {
    $q_coloane=$this->mysql->select('coloana, coloana_sphinx, greutate, operator_sphinx as operator, cauta, analiza, conditie');
    $q_coloane=$this->mysql->where('cauta','1');
    $q_coloane=$this->mysql->get('greutate');
    $coloane=$q_coloane->result_array();
//print_r($coloane);
    return $coloane;
  }
  
  function descarca_coloane_conditie()
  {
    $q_conditie=$this->mysql->select('coloana_sphinx as coloana, greutate, operator_sphinx as operator, cauta, analiza, conditie');
    $q_conditie=$this->mysql->where('conditie','1');
    $q_conditie=$this->mysql->get('greutate');
    $conditie=$q_conditie->result_array();
//print_r($conditie);
    return $conditie;
  }
  
  function descarca_filtre()
  {
    $q_filtre=$this->mysql->order_by('ordonare','ASC');
    $q_filtre=$this->mysql->get('filtre');
    $filtre=$q_filtre->result_array();
//print_r($filtre);
    foreach($filtre as $cheie => $filtru)
    {
      $filtre[$cheie]['coloana']=str_replace('anunturi.','',$filtre[$cheie]['coloana']);
    }
    $this->filtre=$filtre;
    return $filtre;
  }
    
  function analizeaza_cautarea($cauta_text)
  {
    //echo '<br />cauta_text: '.$cauta_text;
//    print_r($cauta_text);
    $analiza=array();
    $_campuri=array();
    $campuri=$this->citeste_greutatile();
    $rest=strtolower($cauta_text);
      
    //*** Cauta posibile filtre in string-ul de cautare si construieste o matrice cu conditii SQL ***
    foreach ($this->filtre as $filtru)
    {
      $pozitie=stripos(trim($rest),$filtru['cuvant']);
      $inceput=$pozitie;
      $sfarsit=$pozitie+strlen($filtru['cuvant']);
      
      if ($pozitie!==FALSE AND ($filtru['coloana']=='pret' OR $filtru['coloana']=='suprafata'))
      {
        preg_match_all('!\d+!', $rest, $matches,  PREG_OFFSET_CAPTURE);
        //print_r($matches);
        foreach ($matches[0] as $potrivit)
        {
          if (($filtru['pozitie']=='dupa' || $filtru['pozitie']=='ambele') && $potrivit[1]==$sfarsit)
          {
            $dupa=$potrivit[0];
          }
          elseif (($filtru['pozitie']=='inainte' || $filtru['pozitie']=='ambele') && ($potrivit[1]+strlen($potrivit[0]))==$inceput)
          {
            $inainte=$potrivit[0];
          }
          if (stripos($rest,'pret')===FALSE) { $inlocuitor='inlocuitor2'; } else { $inlocuitor='inlocuitor'; }
        }
        //echo 'filtru='.$filtru['pozitie'].' potrivit='.$potrivit[0].'<br >';
        if ($filtru['pozitie']=='ambele')
        {
          $filtre[]=array(
                          'coloana' => $filtru['coloana'],
                          'filtru' => str_replace('dupa',$dupa,str_replace('inainte',$inainte,$filtru['inlocuitor']))
                          );
        }
        else
        {
          if ($inainte==0) $inainte='';
          if ($dupa==0) $dupa='';
          $filtre[]=array(
                          'coloana' => $filtru['coloana'],
                          'filtru' => $inainte.$filtru[$inlocuitor].$dupa
                          );
        }
        //echo $inainte.'-'.$filtru['cuvant'].'-'.$dupa.'-'.$rest;
        $rest=str_replace($inainte.$filtru['cuvant'].$dupa,'',trim($rest));
        
      }
      if($pozitie!==FALSE AND $filtru['coloana']=='detalii')
      {
        for ($i=$inceput+strlen($filtru['cuvant'])+1; $i<=strlen($cauta_text); $i++)
        {
          if($cauta_text[$i]==chr(32) OR $i==strlen($cauta_text)) 
          {
            $sfarsit_valoare=substr($cauta_text,$inceput+strlen($filtru['cuvant']),$i-($inceput+strlen($filtru['cuvant'])));
            break;
          }
        }
        $filtre[]=array (
                          'coloana' => $filtru['coloana'],
                          'cuvant' => $sfarsit_valoare
                          );
        $rest=str_replace($filtru['cuvant'].$sfarsit_valoare,'',trim($rest));
      }
    }            
    //print_r($filtre);    
    //echo $rest;

    //*** Cauta cuvinte rezervate si le inlocuieste ***
    foreach ($this->rezervate as $rezervat)
    {
      $pozitie=stripos(trim($rest),trim($rezervat['cuvant']),0);
//      echo $cauta_text.','.$rezervat['cuvant'].'<br />';
      if ($pozitie!==FALSE)
      {
        $fraza[]=$rezervat['inlocuitor'];
        $rest=str_replace(trim($rezervat['cuvant']),'',trim($rest));
      }
    }

    //echo 'rest: '.$rest;
    $desc=$this->descarca_coloane_cautare();

    /*** Compara fiecare cuvant din string-ul de cautare cu coloane descarcate din baza de date ***
    foreach ($desc as $camp)
    {
      $coloane=$this->compara_localitati($camp['coloana'], $camp['coloana_sphinx'], $rest);
      //print_r($coloane);
      foreach ($coloane as $coloana)
      {
        $pozitie=stripos(trim($rest), trim($coloana[$camp['coloana_sphinx']]),0);
        $pozitie_inversata=stripos(trim($coloana[$camp['coloana_sphinx']]),trim($rest),0);
//      echo trim($rest).','.trim($coloana[$camp['coloana']]).'<br />';
        if ($pozitie!==FALSE || $pozitie_inversata!==FALSE)
        {
          $fraza[]=$coloana[$camp['coloana_sphinx']];
//        echo $coloana[$camp['coloana']];
          $rest=str_replace(trim($coloana[$camp['coloana_sphinx']]),'',trim($rest));
//      echo '<br />rest: '.$rest;
        }
      }
    }*/

    //if ($rest>3) $fraza[]=
    //print_r( explode(' ',trim($rest)));
    if(empty($fraza)!==TRUE)
    {
      $fraza=array_merge($fraza,explode(' ',trim($rest)));
    }
    else
    {
      $fraza=explode(' ',trim($rest));
    }
  
    //print_r($fraza);  
    //echo '<br />fraza: '.$fraza;
    //print_r($campuri);
    foreach ($fraza as $cheie => $cuvant)
    {
      foreach ($campuri as $cheie2 => $coloana)
      {
        //echo '<br />'.$coloana['operator_sphinx'].' '.$coloana['coloana_sphinx'].' '.$cuvant.' '.$cheie2.'<br />';
        $q_cuvant=$this->sphinx->select('COUNT(*) AS numara');
        if ($coloana['operator_sphinx']=='LIKE')
        {
          $q_cuvant=$this->sphinx->like($coloana['coloana_sphinx'], trim($cuvant));
        }
        elseif ($coloana['operator_sphinx']=='COMPARISON')
        {
          $q_cuvant=$this->sphinx->where($coloana['coloana_sphinx'], trim($cuvant));
        }
        elseif ($coloana['operator_sphinx']=='MATCH')
        {
          $q_cuvant=$this->sphinx->where('MATCH (\'@'.$coloana['coloana_sphinx'].' "'.trim($cuvant).'"\')', NULL, FALSE);
        }
        else
        {
          continue;
        }
        
        $q_cuvant=$this->sphinx->get('anunturi');
        //echo $this->sphinx->last_query().'<br />';
        $contor=$q_cuvant->row_array();
        //echo $cuvant;
        //echo $coloana;
        //print_r($contor);
        $_campuri[(string)$coloana['coloana_sphinx']]=$contor['numara']*$coloana['greutate'];
        $q_cuvant->free_result();
        unset ($q_cuvant);
      }
      arsort($_campuri);
      reset($_campuri);
      if (current($_campuri)>0) 
      {
        $analiza[]=array('coloana' => key($_campuri), 'cuvant' => trim($cuvant));
      }
      //print_r($_campuri);
      //echo 'cuvant '.$cuvant;
      unset ($_campuri);
    }
    if (isset($filtre)===TRUE) 
    {
      $recombinate=array_merge_recursive($analiza, $filtre);
      $this->analiza=$recombinate;
    }
    else
    {
      $this->analiza=$analiza;
    }
    //print_r($this->analiza);
    return $this->analiza;
  }
  
  function explodeaza($text)
  {
    if (is_array($text)===TRUE) { $_text=current($text); } else { $_text=$text; }
    if (strpos($_text, ' '))
    {
      $explodat=explode(' ', $_text);
    } else {
      $explodat=explode('-', $_text);
    }
    $gasit=array_search('camere', $explodat);
    if ($gasit!==FALSE)
    {
      if (ctype_digit($explodat[$gasit-1])===TRUE)
      {
        $explodat[$gasit]=$explodat[$gasit-1].' '.$explodat[$gasit];
        unset($explodat[$gasit-1]);
      }
      elseif (ctype_digit($explodat[$gasit+1])===TRUE)
      {
        $explodat[$gasit]=$explodat[$gasit+1].' '.$explodat[$gasit];
        unset($explodat[$gasit+1]);
      }
    }
    return $explodat;
  }
  
  function citeste_greutatile()
  {
//    $q_descrie=$this->sphinx->query('DESCRIBE anunturi');
    $q_descrie=$this->mysql->select('coloana, coloana_sphinx, greutate, operator, operator_sphinx');
    $q_descrie=$this->mysql->where('analiza','1');
    $q_descrie=$this->mysql->get('greutate');
    $descrie=$q_descrie->result_array();
//    print_r($descrie);
//    echo $this->sphinx->last_query();
    $q_descrie->free_result();
    unset ($q_descrie);
    return $descrie;
  }
  
  function total_randuri($cautare)
  {
    if(empty($this->analiza)===TRUE) 
    {
      $analiza=$this->analizeaza_cautarea($cautare);
    }
    else
    {
      $analiza=$this->analiza;
    }
    $q_total=$this->sphinx->select('COUNT(*) AS cnt');
//    $q_total=$this->sphinx->distinct();
    //$q_total=$this->sphinx->join('contact', 'anunturi.contact = contact.contact', 'left');
    //$q_total=$this->sphinx->join('url', 'anunturi.tip = url.tip', 'left');
    $q_total=$this->compune_conditia($q_total, $analiza);
//    $q_total=$this->sphinx->group_by('anunturi.id');
    $q_total=$this->sphinx->order_by('data', 'DESC');
//    print_r($q_total);
    $q_total=$this->sphinx->get('anunturi');
    $total=$q_total->row_array();
//    echo $this->sphinx->last_query();
//    print_r($total);
    if ($total['cnt']>99999) $total['cnt']=99999;
    return $total['cnt'];

  }
  
  function compara_anunturi($anunt, $similar)
  {
//    echo $anunt;
//    echo $similar;
    $coada_anunt=str_split(substr($anunt, strlen($anunt)-12, 12));
    $coada_similar=str_split(substr($similar, strlen($similar)-12, 12));
//    print_r($coada_anunt);
//    print_r($coada_similar);
    $mark_anunt=0;
    $mark_similar=0;
    for ($i=0; $i<12; $i++)
    {
      if (ctype_digit($coada_anunt[$i])===TRUE || $mark_anunt==0) 
      {
        $_anunt=substr($anunt, 0, strlen($anunt)-12);
        $mark_anunt=1;
      }
      if (ctype_digit($coada_similar[$i])===TRUE || $mark_similar==0)
      {
        $_similar=substr($similar, 0, strlen($anunt)-12);
        $mark_similar=1;
      }
    }
    $array_1=explode(' ', strtolower(str_replace('&nbsp;', '', str_replace('.',' ',str_replace(',',' ',$_anunt)))));
    $array_2=explode(' ', strtolower(str_replace('&nbsp;', '', str_replace('.',' ',str_replace(',',' ',$_similar)))));
    array_walk($array_1, function(&$value, &$key){ $value=str_replace(' ', '', $value); });
    foreach ($array_1 as $cheie => $cuvant)
    {
      if (strlen($cuvant)<4) unset($array_1[$cheie]);
    }
    foreach ($array_2 as $cheie => $cuvant)
    {
      if (strlen($cuvant)<4) unset($array_2[$cheie]);
    }
    $dif=array_diff($array_1, $array_2);
    $procent=count($dif)*100/count($array_1);
//    print_r( $dif);
//    echo $procent;
    return $procent;
  }
  
  function compara_expresii($anunt, $similar)
  {
//    echo $anunt;
//    echo $similar;
    $coada_anunt=str_split(substr($anunt, strlen($anunt)-12, 12));
    $coada_similar=str_split(substr($similar, strlen($similar)-12, 12));
//    print_r($coada_anunt);
//    print_r($coada_similar);
    $mark_anunt=0;
    $mark_similar=0;
    for ($i=0; $i<12; $i++)
    {
      if (ctype_digit($coada_anunt[$i])===TRUE || $mark_anunt==0) 
      {
        $_anunt=substr($anunt, 0, strlen($anunt)-12);
        $mark_anunt=1;
      }
      if (ctype_digit($coada_similar[$i])===TRUE || $mark_similar==0)
      {
        $_similar=substr($similar, 0, strlen($anunt)-12);
        $mark_similar=1;
      }
    }
    $array_1=explode(',', strtolower(str_replace('&nbsp;', ' ', str_replace('.',' ',$_anunt))));
    $array_2=explode(',', strtolower(str_replace('&nbsp;', ' ', str_replace('.',' ',$_similar))));
//    array_walk($array_1, function(&$value, &$key){ $value=str_replace(' ', '', $value); });
    foreach ($array_1 as $cheie => $cuvant)
    {
      if (strlen($cuvant)<4) unset($array_1[$cheie]);
    }
    foreach ($array_2 as $cheie => $cuvant)
    {
      if (strlen($cuvant)<4) unset($array_2[$cheie]);
    }
    $dif=array_diff($array_1, $array_2);
    $procent=count($dif)*100/count($array_1);
    //print_r( $dif);
    //echo $procent;
    return $procent;
  }
  
  function genereaza_imaginea($cauta_text, $analiza, $segment_de_timp)
  {
    $verifica=$this->verifica_imagine($cauta_text, $segment_de_timp);
    if ($verifica['verificare']===TRUE) return $verifica['numefisier'];
    $preturi_medii=$this->descarca_preturi($cauta_text, $analiza, $segment_de_timp, 0);
    $preturi_mediane=$this->descarca_preturi($cauta_text, $analiza, $segment_de_timp, 1);
    $imagine=$this->deseneaza_diagrama($preturi_medii, $preturi_mediane, $cauta_text, $segment_de_timp);
    return $imagine;
  }
  
  function genereaza_imagine_anunt_id($cauta_text, $segment_de_timp)
  {
    $preturi_medii=$this->descarca_preturi_similare($cauta_text, $segment_de_timp, 0);
//    print_r($preturi_medii);
    $imagine=$this->deseneaza_diagrama($preturi_medii, NULL, $cauta_text['anunt_id'], $segment_de_timp);
//    echo $imagine;
    return $imagine;
  }
  
  function genereaza_imagine_numar($cauta_text, $segment_de_timp)
  {
    if (is_array($cauta_text)===TRUE) $_cauta_text=current($cauta_text);
    $preturi_medii=$this->descarca_preturi_similare($_cauta_text, $segment_de_timp, 0);
    $imagine=$this->deseneaza_diagrama($preturi_medii, NULL, $_cauta_text['anunt_id'], $segment_de_timp);
    return $imagine;
  }
  
  function verifica_imagine($cauta_text, $segment_de_timp)
  {
    $nume_fisier=str_replace('>','_',str_replace('<','_',str_replace(' ', '-',$cauta_text)));
    $_interval=$this->calculeaza_interval($segment_de_timp);
    $interval=$_interval[3];
    $numefisier=$this->cale.$nume_fisier.'-'.$interval.'.png';
    $filemtime=filemtime($numefisier);
    if (date('d',$filemtime)===date('d') && date('m',$filemtime)===date('m'))
    {
      return array(
        'verificare' => TRUE,
        'numefisier' => $numefisier
        );
    }
    else
    {
      return array(
        'verificare' => FALSE,
        'numefisier' => $numefisier
        );
    }
  }
  
  function descarca_preturi($text, $analiza, $segment_de_timp, $tip) 
  {
    if (strpos($text, 'teren')!==FALSE)
    {
      $teren=1;
    }
    else
    {
      $teren=0;
    }
    $timp=$this->calculeaza_interval($segment_de_timp);
    //echo '<br />memorie: '.memory_get_peak_usage();
    $q_preturi=$this->sphinx->select('pret, '.$timp[0].'(data) AS ziua, suprafata, MONTH(data) AS luna, YEAR(data) AS an', FALSE);
    //$q_preturi=$this->sphinx->join('contact', 'anunturi.contact = contact.contact', 'left');
    //$q_preturi=$this->sphinx->join('url', 'anunturi.tip = url.tip', 'left');
    $q_preturi=$this->compune_conditia($q_preturi, $analiza);
/*
    foreach ($analiza as $like)
    {
      if (strlen($like['cuvant'])>0)
      {
        if ($this->cauta_cuvinte_rezervate($like['cuvant'])===FALSE)
        {
          $q_preturi=$this->sphinx->where('MATCH ('.$like['coloana'].') AGAINST ("'.$like['cuvant'].'" IN BOOLEAN MODE)', NULL, FALSE);
        }
        else
        {
          $q_preturi=$this->sphinx->like($like['coloana'], $like['cuvant']);
        }
      }
    }
*/
    $interval_de_timp=time()-$timp[2];
    $q_preturi=$this->sphinx->where('data >= '.$interval_de_timp);
    $q_preturi=$this->sphinx->where('pret > 0');
    $q_preturi=$this->sphinx->where('suprafata > 0');
    $q_preturi=$this->sphinx->order_by('data', 'ASC');
    $q_preturi=$this->sphinx->limit(1000000);
    $q_preturi=$this->sphinx->option('max_matches=1000000');
    //print_r($q_preturi);
    $q_preturi=$this->sphinx->get('anunturi');    
    //echo $this->sphinx->last_query().'<br />';
    $preturi=$this->compileaza_luna($q_preturi->result_array());
    //echo '<br />memorie: '.memory_get_peak_usage();
    $q_preturi->free_result();
    if (strpos($text, 'teren')<>FALSE) $teren=1;
    //print_r($preturi);
    if ($segment_de_timp=='DAY') $_segment=1;
    if ($segment_de_timp=='WEEK') $_segment=7;
    if ($segment_de_timp=='MONTH') $_segment=28;
    if ($segment_de_timp=='YEAR') $_segment=28;
    foreach ($preturi as $cheie => $pereche)
    {
      if (isset($semn)===FALSE) $semn=$pereche['ziua'];
      if (isset($inc)===FALSE) $inc=0;

      if ($pereche['ziua']!=$semn)
      {
        $inc++;
        $semn=$pereche['ziua'];
      }
      if ($inc==$_segment)
      {
          if ($tip==0 && isset($_pret)===TRUE)
          {
            $_pret_mediu[]=intval($this->calculeaza_media($_pret));
          }
          elseif ($tip==1 && isset($_pret)===TRUE)
          {
            $_pret_median[]=intval($this->calculeaza_mediana($_pret));
          }
          if ((isset($_semn_luna)===FALSE || $_semn_luna!=$pereche['luna']) )
          {
            $_data[]=$pereche['ziua'].' '.substr($pereche['luna'],0,3);
            $_semn_luna=$pereche['luna'];
          }
          elseif((isset($_semn_an)===FALSE || $_semn_an!=$pereche['an']))
          {
            $_data[]=$pereche['an'];
            $_semn_an=$pereche['an'];
          }
          else
          {
            $_data[]=$pereche['ziua'];
          }
        unset($semn);
        unset($_pret);
        unset($inc);
      }
      else
      {
          if ($pereche['pret']>2000 && $teren==1 && $pereche['suprafata']>100)
          {
            $_pret[]=$pereche['pret']/$pereche['suprafata'];
          }
          elseif ($pereche['pret']<2000 && $teren==1)
          {
            $_pret[]=$pereche['pret'];
          }
          elseif ($teren<>1)
          {
            $_pret[]=$pereche['pret'];
          }
      }
    }
    if (isset($_pret_mediu)) 
    { 
      $pret=$_pret_mediu; 
    } 
    elseif (isset($_pret_median))
    {
      $pret=$_pret_median;
    }
    else 
    { 
      $pret=0; 
    }
//    return array(((isset($_pret_mediu)===TRUE) ? $_pret_mediu : (isset($_pret_median)===TRUE) ? $_pret_median : 0), (isset($_data)===TRUE) ? $_data : 0);
//    echo $this->sphinx->last_query();
//    print_r (array($pret, (isset($_data)===TRUE) ? $_data : 0));
    return array($pret, (isset($_data)===TRUE) ? $_data : 0);
//    return $retur_arr;
  }
  
  function compileaza_luna($preturi)
  {
    $luni = array(
                  1 => "Ian", 
                  2 => "Feb", 
                  3 => "Mar", 
                  4 => "Apr", 
                  5 => "Mai", 
                  6 => "Iun", 
                  7 => "Iul", 
                  8 => "Aug", 
                  9 => "Sep", 
                  10 => "Oct", 
                  11 => "Noi", 
                  12 => "Dec"
                  );
                  
    foreach ($preturi as $cheie => $pret)
    {
      $preturi[$cheie]['luna']=$luni[$pret['luna']];
    }
    return $preturi;
  }
  
  function descarca_preturi_similare($cauta_text)
  {
//  print_r($cauta_text);
    $q_anunt_id=$this->mysql->from('anunturi');
    $q_anunt_id=$this->mysql->where($cauta_text);
    $q_anunt_id=$this->mysql->get();
    $anunt_id=$q_anunt_id->row_array();
    $anunt=array( 'localitate' => $this->anunt['localitate'],
                  'suprafata' => $this->anunt['suprafata'],
                  'tip' => $this->anunt['tip'] );
    $anunt_or=array( 'contact' => $this->anunt['contact'] );
    $q_similar=$this->mysql->select('detalii, pret, suprafata, DAY(data) as data, data as ordine');
    $q_similar=$this->mysql->from('anunturi');
    $q_similar=$this->mysql->like($anunt);
    $q_similar=$this->mysql->like($anunt_or);
    $q_similar=$this->mysql->order_by('ordine', 'asc');
    $q_similar=$this->mysql->get();
    $similar=$q_similar->result_array();
    $q_similar->free_result();

    foreach ($similar as $cheie => $pereche)
    {
      $procent=$this->compara_anunturi($anunt_id['detalii'], $pereche['detalii']);
      if ( $procent < $this->procent) 
      {
        if ($pereche['pret']<1) { continue; }
        if ($anunt_id['tip']==8 && $pereche['pret']>1000 && $pereche['pret']>0)
        {
          $_pret[] = $pereche['pret']/$pereche['suprafata'];
          $_data[] = $pereche['data'];
        }
        else
        {
          $_pret[] = $pereche['pret'];
          $_data[] = $pereche['data'];
        }
      }
    }

//    print_r($_pret);
    return array($_pret, $_data);
  }    
    
  function cauta_similar($initial)
  {
    foreach ($initial as $cheie => $anunt)
    {
      $aparitii=0;
      $q_initial=$this->sphinx->select('detalii');
      $q_initial=$this->sphinx->where('MATCH(\'@localitate "'.str_replace("'"," ",$anunt['localitate']).'"\')');
      $q_initial=$this->sphinx->where('tip='.$anunt['tip'],NULL,FALSE);
      $q_initial=$this->sphinx->where('suprafata='.$anunt['suprafata'],NULL,FALSE);
      $q_initial=$this->sphinx->order_by('data', 'DESC');
      $q_initial=$this->sphinx->get('anunturi');
      foreach ($q_initial->result_array() as $detalii)
      {
        $procent=$this->compara_anunturi($anunt['detalii'], $detalii['detalii']);
        if ( $procent < $this->procent) 
        {
          $aparitii++;
        }
        $initial[$cheie]['similar']=$aparitii;
      }
    }
    return $initial;
  }
  
  function cauta_id($cauta_text)
  {
//  print_r($cauta_text);
    $localte=$this->mysql->query('SET lc_time_names = \'ro_RO\';');
    $q_anunt=$this->mysql->from('anunturi');
    $q_anunt=$this->mysql->where($cauta_text);
    $q_anunt=$this->mysql->get();
    $this->anunt=$q_anunt->row_array();
    $anunt=array( 'localitate' => $this->anunt['localitate'],
                  'suprafata' => $this->anunt['suprafata'],
                  'tip' => $this->anunt['tip'] );
    $anunt_or=array( 'contact' => $this->anunt['contact'] );
    $q_similar=$this->mysql->select('localitate, suprafata, pret, detalii, DATE_FORMAT(data, \'%e %M %Y\') as data', FALSE);
    $q_similar=$this->mysql->from('anunturi');
    $q_similar=$this->mysql->like($anunt);
    $q_similar=$this->mysql->like($anunt_or);
    $q_similar=$this->mysql->order_by('anunturi.data', 'desc');
    $q_similar=$this->mysql->get();
    //echo $this->mysql->last_query();

    foreach ($q_similar->result_array() as $key => $similar)
    {
      $procent=$this->compara_anunturi($this->anunt['detalii'], $similar['detalii']);
      if ( $procent < $this->procent)  $this->similare[$key]=$similar;
    }
  }    
    
  function calculeaza_interval($segment_de_timp)
  {
    unset($interval);
    $interval=array();
    if ($segment_de_timp==='DAY') 
    {
      $interval[]='DAY';
      $interval[]='DAY';
      //$interval[]='INTERVAL 1 MONTH';
      $interval[]=31*24*3600;
      $interval[]='zi';
    }
    elseif ($segment_de_timp==='WEEK')
    {
      $interval[]='DAY';
      $interval[]='WEEK';
      //$interval[]='INTERVAL 3 MONTH';
      $interval[]=3*31*24*3600;
      $interval[]='luna';
    }
    elseif ($segment_de_timp==='MONTH')
    {
      $interval[]='DAY';
      $interval[]='WEEK';
      //$interval[]='INTERVAL 12 MONTH';
      $interval[]=365*24*3600;
      $interval[]='an';
    }
    elseif ($segment_de_timp==='YEAR')
    {
      $interval[]='DAY';
      $interval[]='YEAR';
      $interval[]=10*365*24*3600;
      $interval[]='decada';
    }
    return $interval;  
  }

  function calculeaza_media($arr)
  {
//    print_r($arr);
    $suma=array_sum($arr);
    $count=count($arr);
    $medie=intval($suma/$count);
    return $medie;
  }
  
  function calculeaza_mediana($arr)
  {
//    print_r($arr);
    sort($arr);
    $count = count($arr); //total numbers in array
    $middleval = floor(($count-1)/2); // find the middle value, or the lowest middle value
    if($count % 2) 
    { // odd number, middle is the median
      $median = $arr[$middleval];
    } 
    else 
    { // even number, calculate avg of 2 medians
      $low = $arr[$middleval];
      $high = $arr[$middleval+1];
      $median = (($low+$high)/2);
    }
    return $median;
  }
  
  function deseneaza_diagrama($preturi_medii=NULL, $preturi_mediane=NULL, $cauta_text, $segment_de_timp)
  {
    //print_r($preturi_medii);
    //print_r($preturi_mediane);
    $ordonata_medii=$preturi_medii[1];
    $abscisa_medii=$preturi_medii[0];

    $nume_fisier=str_replace('>','_',str_replace('<','_',str_replace(' ', '-',$cauta_text)));
    $_interval=$this->calculeaza_interval($segment_de_timp);
    $interval=$_interval[3];

    /* Create your dataset object */ 
    $myData = new Pdata(); 
  
    /* Add data in your dataset */ 
    $myData->addPoints($preturi_medii[0], 'preturi_medii');
    if (count($preturi_mediane)>0) $myData->addPoints($preturi_mediane[0], 'preturi_mediane');
    $myData->addPoints($preturi_medii[1], 'timp');
    $myData->setSerieDescription('timp','Ziua');
    $myData->setSerieDescription('preturi_medii','Pret mediu');
    $myData->setSerieDescription('preturi_mediane','Pret median');
    $myData->setAxisName(0,'Euro');
    $myData->setAbscissa('timp');
    
    /* Create a pChart object and associate your dataset */ 
    $myPicture = new Pimage(974,200,$myData);
    $myPicture->Antialias = TRUE; 
      
    /* Choose a nice font */
    $myPicture->setFontProperties(array("FontName"=>FONT_LEGENDA,"FontSize"=>6));
        
    /* Define the boundaries of the graph area */
    $myPicture->setGraphArea(40,20,830,180);
//    $myPicture->drawLegend(170,30,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL)); 
          
    /* Draw the scale, keep everything automatic */ 
    $myPicture->drawScale(array("GridR"=>200,"GridG"=>200,"GridB"=>200,"DrawXLines"=>TRUE, "DrawYLines"=>ALL));
            
    $myPicture->Antialias = TRUE; 
    /* Draw the scale, keep everything automatic */ 
    $myPicture->drawSplineChart();

    $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 
    $RectangleSettings = array("R"=>134,"G"=>209,"B"=>27,"Alpha"=>100,"Surrounding"=>30);
    $myPicture->drawRoundedFilledRectangle(850,10,970,55,5,$RectangleSettings);     
    if (isset($preturi_mediane)===TRUE)
    {
      $RectangleSettings = array("R"=>232,"G"=>51,"B"=>51,"Alpha"=>100,"Surrounding"=>30);
      $myPicture->drawRoundedFilledRectangle(850,120,970,165,5,$RectangleSettings);
    }
    
//    $myPicture->setFontProperties(array("FontName"=>"/var/www/cauta-imobiliare/application/libraries/pchart/fonts/verdana.ttf","FontSize"=>6));
    $myPicture->setFontProperties(array("FontName"=>FONT_MEDII,"FontSize"=>6));
    if (isset($preturi_mediane)===TRUE)
    {
      $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>13, "Align"=>TEXT_ALIGN_MIDDLEMIDDLE);
      $myPicture->drawText(910,32,"Pret mediu\n".intval($preturi_medii[0][count($preturi_medii[0])-1])." EUR",$TextSettings); 
    }
    else
    {
      $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>13, "Align"=>TEXT_ALIGN_MIDDLEMIDDLE);
      $myPicture->drawText(910,32,"Pret\n".intval($preturi_medii[0][count($preturi_medii[0])-1])." EUR",$TextSettings); 
    }
    if (isset($preturi_mediane)===TRUE)
    {
      $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>13, "Align"=>TEXT_ALIGN_MIDDLEMIDDLE);
      $myPicture->drawText(910,142,"Pret median\n".intval($preturi_mediane[0][count($preturi_mediane[0])-1])." EUR",$TextSettings); 
    }
              
    /* Build the PNG file and send it to the web browser */ 
    $myPicture->Render($this->cale.$nume_fisier.'-'.$interval.'.png');
    return $this->cale.$nume_fisier.'-'.$interval.'.png';
  }
}
  
?>
