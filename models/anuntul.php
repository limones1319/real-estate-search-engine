<?php

class Anuntul_t extends CI_Model 
{
  var $html;
  var $html_anunt;
  var $anunturi=array();
  var $duplicat=0;
  var $anunturi_numarate=0;
  var $pagini=0;
  var $anunturi_pagina=0;

  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
    $this->load->database();
    $this->load->library('simple_html_dom');
    ini_set('MAX_EXECUTION_TIME', -1);
  }
                            
  function principal()
  {
    $this->salveaza_tabelele();
    $this->descarca_urluri();
  }
  
  function salveaza_tabelele()
  {
    $data=date('YmdHis');
    $this->db->query('CREATE TABLE zbak_anuntul_telefonic_'.$data.' LIKE anuntul_telefonic');
    $this->db->query('INSERT INTO zbak_anuntul_telefonic_'.$data.' SELECT * FROM anuntul_telefonic');
    $this->db->query('CREATE TABLE zbak_anuntul_telefonic_contact_'.$data.' LIKE anuntul_telefonic_contact');
    $this->db->query('INSERT INTO zbak_anuntul_telefonic_contact_'.$data.' SELECT * FROM anuntul_telefonic_contact');
  }
  
  function descarca_urluri()
  {
    $urluri=$this->db->query('SELECT * FROM anuntul_telefonic_url');
    foreach ($urluri->result() as $url)
      {
      $this->descarca_lista($url);
      }
    echo 'duplicate='.$this->duplicat.'<br />anunturi='.$this->anunturi_numarate.'<br />pagini='.$this->pagini.'<br />anunturi/pagina='.$this->anunturi_pagina.'<br /><br />';
    return $this->anunturi;
  }
  
  function descarca_lista($i_url)
  {
    $this->html=file_get_html($i_url->url);
    if (is_null($this->html)) 
    {
      $this->return='nu a incarcat!';
      return $this->return;
    }
    $pagini = $this->html->find('div#lista_header div.paginare_pagini ul.all_pages li a');
    if (is_null($pagini)) $this->return='nu a gasit!';
    
    $html_pagina=array();
    $lista=array();
    foreach ($pagini as $key => $pagina)
    {
      if (preg_match('/^http/',$pagina->href)) { $href=$pagina->href; } else { $href=$i_url->url; }
      $html_pagina = file_get_html($href);
      if (is_null($html_pagina)) 
      {
        $this->return='nu a incarcat!';
        return $this->return;
      }
      $lista = $html_pagina->find('a.atext');
      if (is_null($lista)) $this->return='nu a gasit!';
      foreach ($lista as $cheie => $a)
      {
        if (preg_match('/html/',$a->href)) $lista_urluri[$cheie]=$a->href;
      }
      $this->descarca_anunturi($lista_urluri,$i_url->tip);
      $this->pagini++;
      unset ($lista_urluri);
    }
  }
  
//Descarca lista de url-uri de pe pagina si cauta pe fiecare pagina a fiecarui url detalii despre anunt pentru a forma un array.

  function descarca_anunturi($lista_urluri, $tip)
  {
    $anunturi=array();
    foreach ($lista_urluri as $key => $url)
    {
      $this->html_anunt=file_get_html($url);
      if (is_null($this->html)) 
      {
        $this->return='nu a gasit!';
        return $this->return;
      }
//      $anuntid=$this->html_anunt->find('input.check',0)->anuntid;
      $anuntid=$this->html_anunt->find('table#detalii_anunt',0)->anuntid;
      if ($this->verifica_anunt($anuntid)<1)
      {
        $anunturi[$key]['anunt_id']=$anuntid;
        $anunturi[$key]['url']=$url;
        $anunturi[$key]['judet']=$this->cauta_locatie($this->html_anunt->find('td#descriere_anunt div.contact_data',1)->plaintext,'j');
        $anunturi[$key]['localitate']=$this->cauta_locatie($this->html_anunt->find('td#descriere_anunt div.contact_data',1)->plaintext,'l');
        $anunturi[$key]['detalii']=$this->cauta_detalii($this->html_anunt->find('td#descriere_anunt div.detalii_txt',0)->innertext);
        $anunturi[$key]['suprafata']=$this->verifica_suprafata($anunturi[$key]['detalii']);
        $anunturi[$key]['data']=date('Y-m-d H:i:s',strtotime(substr($this->html_anunt->find('div.detalii_txt span.data',0)->plaintext,0,7).date('Y').substr($this->html_anunt->find('div.detalii_txt span.data',0)->plaintext,8,4)));
        $anunturi[$key]['contact']=$this->cauta_contact(1);
        if ($this->html_anunt->find('span.pret',0))
        {
          $anunturi[$key]['pret']=str_replace('.','',str_replace('mp','',str_replace('Pret: ','',$this->html_anunt->find('span.pret',0)->plaintext)));
        } else {
          $anunturi[$key]['pret']=0;
        }
        if ($this->html_anunt->find('span.site',0))
        {
          $anunturi[$key]['site']=$this->html_anunt->find('span.site',0)->plaintext;
        } else {
          $anunturi[$key]['site']='n';
        }
        if ($this->html_anunt->find('a.email',0))
        {
          $anunturi[$key]['email']=str_replace('mailto:','',$this->html_anunt->find('a.email',0)->href);
        } else {
          $anunturi[$key]['email']='n';
        }
        if (strpos($this->html_anunt->find('div.contact_data',0)->plaintext,'/')>0)
        { 
          $anunturi[$key]['contact2']=$this->cauta_contact(0);
        } else {
          $anunturi[$key]['contact2']='-1';
        }
        $anunturi[$key]['tip']=$tip;
        $this->anunturi_pagina++;
      }
      unset ($this->html_anunt);
//    echo '<br />anunturi='.$key.'<br />';
    }
    if (count($anunturi)>0) $this->stocheaza_anunturi($anunturi);
    unset($anunturi);
//    print_r($anunturi);
  }
  
  function cauta_detalii($neprelucrat)
  {
    $inceput=strpos($neprelucrat, '<strong>');
    $sfarsit=strpos($neprelucrat, '<span class="data">');
    $detalii_cu_html=substr($neprelucrat, $inceput, $sfarsit-$inceput);
    $html=str_get_html($detalii_cu_html);
    $detalii=str_replace('&nbsp;', ' ', $html->plaintext);
    return $detalii;
  }
  
//Cauta numarul de telefon in div-ul conctact al anuntului. De obicei sunt si cate doua numere de telefon in div despartite prin /.

  function cauta_contact($secundar)
  {
    if ($secundar>0) 
    {
      $find_div=$this->html_anunt->find('div.contact_data',0);
      if (substr_count(substr($find_div->plaintext,0,10),'.')<1) 
      { 
        $lungime_mobil=10; 
        $lungime_fix=10; 
      } else { 
        $lungime_mobil=12; 
        $lungime_fix=13; 
      }
      $contact=str_replace('/','',str_replace('.','',substr($find_div->plaintext,0,(strpos(substr($find_div->plaintext,0,4),'.') ? $lungime_fix : $lungime_mobil))));
    } else {
      $find_div=$this->html_anunt->find('div.contact_data',0);
      $start=strpos($find_div->plaintext,'/')+2;
      if (substr_count(substr($find_div->plaintext,$start,13),'.')<1) 
      { 
        $lungime_mobil=10; 
        $lungime_fix=10; 
      } else { 
        $lungime_mobil=12; 
        $lungime_fix=13; 
      }
      $contact=str_replace('/','',str_replace('.','',substr($find_div->plaintext,$start,(strpos(substr($find_div->plaintext,$start,4),'.') ? $lungime_fix : $lungime_mobil))));
    }
    return $contact;
  }
  
//Cauta locatia si daca nu o gaseste, atunci va cauta in detalii-le anuntului

  function cauta_locatie($find,$mod)
  {
//    $locatie_start=strpos($find,'<div class="judet bkg"></div>')+29;
//    $locatie_sfarsit=strpos($find,'<br style="line-height:3px"/>')-1;
    $locatie_sfarsit=strlen($find);
    $locatie_bulk=$find;
//    $locatie_bulk=substr($find,$locatie_start,$locatie_sfarsit-$locatie_start+1);
    if ($mod=='j') 
    {
      $locatie=substr($locatie_bulk,8,strpos($locatie_bulk,',')-8);
    } else {
//      $locatie=substr($locatie_bulk,strpos($locatie_bulk,',')+14,$locatie_sfarsit-(strpos($locatie_bulk,',')+14));
      $locatie=substr($locatie_bulk,strpos($locatie_bulk,',')+14,$locatie_sfarsit-(strpos($locatie_bulk,',')+14));
    }
    if ($mod=='j' && strpos($locatie_bulk,',')===FALSE) 
    { 
      return strtolower($locatie_bulk); 
    } elseif ($mod=='l' && strpos($locatie_bulk,',')===FALSE) { 
      return str_replace(',','',strtolower($this->html_anunt->find('div.detalii_txt strong',0)->plaintext));
//      return str_replace(',','',strtolower($locatie_bulk));
    } else {
      return strtolower($locatie); 
    }
  }
  
//Catalogheaza numarul de telefon ca agentie sau particular, dupa care stocheaza anuntul in baza de date.

  function stocheaza_anunturi($anunturi)
  {
    foreach ($anunturi as $anunt)
    {
      $this->stocheaza_contact($anunt);
//      echo 'anunt<br />';
//      print_r($anunt);
      if ($this->verifica_anunt($anunt['anunt_id'])<1)
      {
        $this->db->insert('anuntul_telefonic',$anunt);
//        $this->anunturi_numarate++;
      }
    }
    unset ($anunturi);
  }
  
//Verifica daca numarul de telefon apartine unui particular sau unei agentii dupa care il stocheaza in baza de date.

  function stocheaza_contact($contact)
  {
    $agentie='particular';
    $telefoane=array($contact['contact'], $contact['contact2']);

    foreach ($telefoane as $telefon)
    {
      if (strlen($telefon)>7 && ctype_digit($telefon)===TRUE)
      {
        $q_cauta_agentie=$this->db->select('contact, tip, localitate, site, count(id) as count');
        $q_cauta_agentie=$this->db->from('anuntul_telefonic');
        $q_cauta_agentie=$this->db->where('contact', $telefon);
        $q_cauta_agentie=$this->db->group_by(array('contact', 'tip', 'localitate'));
        $q_cauta_agentie=$this->db->get();
        $cauta_agentie=$q_cauta_agentie->result_array();
//        print_r($cauta_agentie);
        if (count($cauta_agentie)>0)
        {
          if ($cauta_agentie[0]['site']<>'n')
          {
            $agentie='agentie';
          }
          elseif (count($cauta_agentie)>1) 
          {
            $agentie='agentie';
          } 
          elseif (count($cauta_agentie)>0) 
          {
            if ($cauta_agentie[0]['count']>1)
            {
              $q_similar=$this->db->select('detalii');
              $q_similar=$this->db->or_where(array('contact' => $telefon, 'contact2' => $telefon));
              $q_similar=$this->db->get('anuntul_telefonic');
              $similare=$q_similar->result_array();
              foreach ($similare as $similar)
              {
                if ($this->compara_anunturi($similar['detalii'], $similare[0]['detalii'])<50)
                {
                  $agentie='agentie';
                }
              }
            }
          } 
          else 
          {
            $agentie='particular';
          }
        }
        $q_cauta_agentie->free_result();
        $q_insereaza=$this->db->query('INSERT IGNORE INTO anuntul_telefonic_contact (contact, tip) 
                                        VALUES (\''.$telefon.'\', \''.$agentie.'\') 
                                        ON DUPLICATE KEY UPDATE tip=\''.$agentie.'\'');
      }
    }
  }
  
  function verifica_anunt($anunt_id)
  {
    $where=array('anunt_id' => $anunt_id);
    $query=$this->db->get_where('anuntul_telefonic',$where);
    if ($query->num_rows()>0) 
    {
      return 1;
    } else {
      return 0;
    }  
  }
  
  function verifica_suprafata($detalii)
  {
    $suprafata_arr=$this->html_anunt->find('div.detalii_txt table td.oblig_txt',0);
    if (isset($suprafata_arr))
    {
      if(intval($suprafata_arr->plaintext)>0) 
      { 
        echo 'plain.'.intval($suprafata_arr->plaintext);
        return str_replace('.','',str_replace('mp','',str_replace(' ','',$suprafata_arr->plaintext))); 
      }
//      if(intval($suprafata_arr->plaintext)>0) { return str_replace(',','',str_replace('metri patrati','',str_replace('Suprafata: ','',$suprafata_arr->plaintext))); }
    }
    $count = strlen($detalii);
    $split=str_split($detalii);
    $i = 0;
    $mie=0;
    $inceput=0;
    $sfarsit=0;
    $mp=0;
//    while( $i < $count ) 
    foreach($split as $cheie => $ciob)
    {
      if( ctype_digit($ciob)===TRUE ) 
      {
        if ($inceput<1) $inceput=$cheie;
      } 
//      elseif (strpos($detalii,'.',$cheie)==$cheie && $mie==0)
      elseif($ciob=='.' && $mie==0)
      {
        $mie=1;
        echo 'mie.';
      }
      elseif ($inceput>0 && ctype_digit($ciob)!==TRUE && $sfarsit<1)
      {
        $sfarsit=$cheie;
        echo 'sfarsit.';
      }
//      elseif (((strpos($detalii,'m',$cheie)==$cheie && strpos($detalii,'p',$cheie+1)==$cheie+1) || strpos($detalii,'me',$cheie)==$cheie) && $mp=0)
      elseif (($ciob=='m' && $split[$cheie+1]=='p' && $mp==0) || ($ciob=='m' && $split[$cheie+1]=='e' && $mp==0))
      {
        $mp=1;
        echo 'mp.';
      }
      elseif ($inceput+10 > $cheie && $inceput != 0 && $sfarsit > $inceput+1 && $mp==1)
      {
        echo 'retur.';
        echo str_replace('.','',substr($detalii,$inceput,$sfarsit-$inceput));
        return str_replace('.','',substr($detalii,$inceput,$sfarsit-$inceput));
      }
      elseif ($inceput+10 > $cheie && $inceput != 0 && $sfarsit > $inceput+1 && $mp==0)
      {
        $mie=0;
        $inceput=0;
        $sfarsit=0;
        $mp=0;
        echo 'reset.';
      }
      $i++;
    }
    return 0;
  }
  
//Compara doua anuturi si returneaza gradul de asemanare in procente.

  function compara_anunturi($anunt, $similar)
  {
    $array_1=explode(' ', str_replace(',',' ',$anunt));
    $array_2=explode(' ', str_replace(',',' ',$similar));
    $dif=array_diff($array_1, $array_2);
    $procent=count($dif)*100/count($array_1);
    return $procent;
  }
}

?>