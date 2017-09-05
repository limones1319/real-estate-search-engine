<?php

class Tocmai extends CI_Model 
{
  var $html;
  var $html_anunt;
  var $anunturi=array();
  var $duplicat=0;
  var $anunturi_numarate=0;
  var $pagini=0;
  var $anunturi_pagina=0;
  
  var $ini=array();
  var $jurnal='application/logs/intrari.log';
  var $ace=array( '.',
                  ',',
                  ':',
                  ';',
                  '/',
                  'EUR',
                  'Pret',
                  'pret',
                  'Preţ',
                  'RON',
                  'LEU',
                  'LEI',
                  'mp',
                  'metri patrati',
                  'Suprafata',
                  'suprafata',
                  'Suprafaţă',
                  'teren'
                  );
  var $diacritice=array( 'ţ' => 't',
                         'â' => 'a',
                         'â' => 'a',
                         'î' => 'i',
                         'ş' => 's'
                        );

  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
    $this->load->database();
    $this->load->library('simple_html_dom');
    ini_set('MAX_EXECUTION_TIME', -1);
    setlocale(LC_ALL, 'en_US.UTF-8');

    $_chei=$this->db->select('variabila');
    $_chei=$this->db->where('sit', 'tocmai');
    $_chei=$this->db->get('taguri');
    $chei=$_chei->result_array();
    $_valori=$this->db->select('tag, tag2, cheie, cauta_text, identifica');
    $_valori=$this->db->where('sit', 'tocmai');
    $_valori=$this->db->get('taguri');
    $valori=$_valori->result_array();
    foreach ($chei as $k => $cheie)
    {
      $this->ini[(string)$cheie['variabila']]=$valori[$k];
//      array_push($this->ini, $valori[$k]);
//      print_r( $chei);
//      print_r($valori[$k]);
//echo $k;
    }
//    $this->ini=array_combine($chei, $valori);
//    print_r($this->ini);
  }
                            
  function principal($variabile)
  {
    echo 'inceput';
    print_r($variabile);
    print_r ($_GET);
    print_r ($QUERY_STRING);
    echo'i_url='.$variabile;
    $start=time();
    $this->scrie_jurnal('tocmai: START: incep sesiunea de colectare.');
    $this->descarca_urluri($variabile);
    $this->scrie_jurnal('tocmai: STOP: am terminat sesiunea de colectare.');
    $stop=time();
    $this->scrie_jurnal('tocmai: DURATA: '.($stop-$start));
  }
  
  function descarca_urluri($variabile)
  {
    print_r($variabile);
    $urluri=$this->db->where('id', $variabile['url_id']);
    $urluri=$this->db->get('url');
    $url=$urluri->row();
    $this->descarca_lista($url);
    $this->scrie_jurnal('tocmai: duplicate='.$this->duplicat.' anunturi='.$this->anunturi_numarate.' pagini='.$this->pagini.' anunturi/pagina='.$this->anunturi_pagina);
    return $this->anunturi;
  }
  
  function descarca_lista($i_url)
  {
    echo 'inceput';
    print_r($i_url);
    echo'i_url='.$i_url;
    $this->html=file_get_html($i_url->url);
    if (is_null($this->html)===TRUE) 
    {
      $this->return='nu a incarcat!';
      $this->scrie_jurnal('tocmai: EROARE: nu poate incarca pagina '.$i_url);
      return $this->return;
    }
    $pagini = $this->html->find($this->ini['pagini']['tag']);
    $query_string=str_replace('&amp;', '&', substr($this->html->find($this->ini['ultima_pagina']['tag'], $this->ini['ultima_pagina']['cheie'])->href, strlen('http://www.tocmai.ro/cauta?')));
    parse_str($query_string, $ultima_pagina);
    
    if (is_null($pagini)===TRUE || is_null($ultima_pagina)===TRUE) 
    {
      $this->scrie_jurnal('tocmai: EROARE: nu am gasit paginile!');
      return;
    }
//    echo $pagini->innertext;
//    print_r($pagini);
    $fara_page=$ultima_pagina;
    unset ($fara_page['page']);
    $query_string=http_build_query($fara_page);
    $html_pagina=array();
    $lista=array();
//    echo $pagini;
    for ($i=1; $i<$ultima_pagina['page']; $i++)
    {
      //if (preg_match('/^http/',$pagina->href)) { $href=$pagina->href; } else { $href=$i_url->url; }
      //if ($pagina->class!='pager-current corner first') { $href_pagina='http://www.az.ro'.$pagina->find($this->ini['href_pagina']['tag'], $this->ini['href_pagina']['cheie'])->href; $this->scrie_jurnal('tocmai: am gasit href.'); } else { $href_pagina=$i_url->url; $this->scrie_jurnal('tocmai: NU am gasit href.');}
      $this->scrie_jurnal('tocmai: incarc pagina http://www.tocmai.ro/cauta?page='.$i.$query_string);
      
      $html_pagina = file_get_html('http://www.tocmai.ro/cauta?page='.$i.$query_string);
      if (is_null($html_pagina)===TRUE) 
      {
        $this->scrie_jurnal ('tocmai: EROARE: nu am putut incarca pagina '.$href_pagina);
        return $this->return;
      }
      $lista = $html_pagina->find($this->ini['lista']['tag']);
      if (is_null($lista)===TRUE) $this->scrie_jurnal('tocmai: EROARE: nu am gasit lista!');
      foreach ($lista as $cheie => $a)
      {
        $lista_urluri[$cheie]=$a->href;
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
      if ($this->html_anunt===FALSE) 
      {
        $this->scrie_jurnal('tocmai: EROARE: nu a gasit! pagina '.$url);
        continue;
      }
      else
      {
        $this->scrie_jurnal('tocmai: incarc pagina '.$url);
      }
      $anuntid=end(
                    explode('-', 
                            substr(
                                    substr(
                                            $url,
                                            strlen('http://www.tocmai.ro/')
                                            ), 
                                    0,
                                    strpos(
                                            substr(
                                                    $url,
                                                    strlen('http://www.tocmai.ro/')
                                                    ), 
                                            '.html'
                                            )
                                    )
                            )
                    );
      //$this->scrie_jurnal('tocmai: am gasit anunt id '.$anuntid.$this->html_anunt->find($this->ini['anuntid']['tag'],$this->ini['anuntid']['cheie']));
      if ($this->verifica_anunt($anuntid)<1)
      {
        $anunturi[$key]['anunt_id']=$anuntid;
        $anunturi[$key]['url']=$url;
        $anunturi[$key]['judet']=$this->cauta_text($this->html_anunt->find($this->ini['judet']['tag']),'judet');
        $anunturi[$key]['localitate']=$this->cauta_localitate();
        $anunturi[$key]['suprafata']=$this->cauta_text($this->html_anunt->find($this->ini['suprafata']['tag']),'suprafata');
        $anunturi[$key]['detalii']=$this->inlocuieste_diacritice(reset(explode('<br / >', $this->cauta_detalii($this->html_anunt->find($this->ini['detalii']['tag'], $this->ini['detalii']['cheie'])->innertext))));
//        $anunturi[$key]['data']=date('Y-m-d H:i:s',strtotime(substr($this->html_anunt->find($this->ini['detalii']['tag'], $this->ini['detalii']['cheie'])->plaintext,0,7).date('Y').substr($this->html_anunt->find('div.detalii_txt span.data',0)->plaintext,8,4)));
        $anunturi[$key]['contact']=$this->cauta_contact($this->html_anunt->find($this->ini['contact']['tag'],$this->ini['contact']['cheie'])->src);
        if ($this->html_anunt->find($this->ini['pret']['tag'], $this->ini['pret']['cheie']))
        {
//          $anunturi[$key]['pret']=str_replace('.','',str_replace('mp','',str_replace('Pret: ','',$this->html_anunt->find($this->ini['contact']['tag'], $this->ini['contact']['cheie'])->plaintext)));
          $anunturi[$key]['pret']=$this->inlocuieste($this->html_anunt->find($this->ini['pret']['tag'], $this->ini['pret']['cheie'])->plaintext);
        } else {
          $anunturi[$key]['pret']=0;
        }
        if ($this->html_anunt->find($this->ini['site']['tag'], $this->ini['site']['cheie']))
        {
          $anunturi[$key]['site']=$this->html_anunt->find($this->ini['site']['tag'], $this->ini['site']['cheie'])->plaintext;
        } else {
          $anunturi[$key]['site']='n';
        }
/*        if ($this->html_anunt->find($this->ini['email']['tag'], $this->ini['email']['cheie']))
        {
          $anunturi[$key]['email']=str_replace('mailto:','',$this->html_anunt->find($this->ini['email']['tag'], $this->ini['email']['cheie'])->href);
        } else {
          $anunturi[$key]['email']='n';
        }
        if (is_null($this->html_anunt->find($this->ini['contact2']['tag'],$this->ini['contact2']['cheie']))===FALSE)
        { 
          $anunturi[$key]['contact2']=$this->cauta_contact(0);
        } else {
          $anunturi[$key]['contact2']='-1';
        }*/
        $anunturi[$key]['contact2']='-1';
        $anunturi[$key]['email']='n';
        $anunturi[$key]['tip']=$tip;
        $anunturi[$key]['sursa']='tocmai';
        $this->anunturi_pagina++;
      }
      unset ($this->html_anunt);
//    echo '<br />anunturi='.$key.'<br />';
    }
    if (count($anunturi)>0) $this->stocheaza_anunturi($anunturi);
    unset($anunturi);
//    print_r($anunturi);
  }
  
  function cauta_localitate()
  {
    $text=$this->html_anunt->find($this->ini['localitate']['tag']);
    $localitate=$this->cauta_text($text, 'localitate');
    if (strlen($localitate)<3)
    {
      $q_localitati=$this->db->select('localitate');
      $q_localitati=$this->db->from('anunturi');
      $q_localitati=$this->db->group_by('localitate');
      $q_localitati=$this->db->order_by('count(localitate)', 'DESC');
      $q_localitati=$this->db->get();
      $localitati=$q_localitati->result_array();
      $text=$this->html_anunt->find($this->ini['localitate']['tag2'], $this->ini['pret']['cheie']);
      foreach ($localitati as $localitate)
      {
        if (stripos($text, $localitate)!==FALSE) return $localitate;
      }
    }
    else
    {
      return $localitate;
    }
  }

  function cauta_text($matrice,$variabila)
  {
//    $this->scrie_jurnal('tocmai: am apelat functia cauta text');
    foreach ($matrice as $paragraf)
    {
//      $this->scrie_jurnal('tocmai: am gasit paragraf'.$paragraf->plaintext);
      $text=explode(':',$paragraf->plaintext);
      if ($text[0]==$this->ini[$variabila]['cauta_text'])
      {
        return $this->inlocuieste_diacritice(strtolower($text[1]));
      }
    }
    return '';
  }
  
  function inlocuieste($sir)
  {
    foreach ($this->ace as $ac)
    {
      $sir=str_replace($ac, '', $sir);
    }
    return $sir;
  }
  
  function inlocuieste_diacritice($sir)
  {
/*
    foreach ($this->diacritice as $diacritica => $substitut)
    {
      $sir=str_replace($diacritica, $substitut, $sir);
    }
*/
    $trans = iconv('UTF-8', 'ASCII//TRANSLIT', $sir);
    return $trans;
  }
  
  function cauta_detalii($neprelucrat)
  {
//    $inceput=strpos($neprelucrat, '<strong>');
//    $sfarsit=strpos($neprelucrat, '<span class="data">');
//    $detalii_cu_html=substr($neprelucrat, $inceput, $sfarsit-$inceput);
    $html=str_get_html($neprelucrat);
    $detalii=str_replace('&nbsp;', ' ', $html->plaintext);
    return $detalii;
  }
  
//Cauta numarul de telefon in div-ul conctact al anuntului. De obicei sunt si cate doua numere de telefon in div despartite prin /.

  function cauta_contact($url)
  {
    $img = '/var/www/cauta-imobiliare/application/cache/imagine_ocr.gif';
    file_put_contents($img, file_get_contents($url));
    $tocr=new TesseractOCR();
    $text=$tocr->recognize($img, range(0,9));
    $this->scrie_jurnal('tocmai: test tesseract '.$url.', '.$text);
/*    if ($secundar>0) 
    {
      $find_div=$this->html_anunt->find($this->ini['contact']['tag'], $this->ini['contact']['cheie']);
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
      $contact=$this->inlocuieste($this->html_anunt->find($this->ini['contact2']['tag'], $this->ini['contact2']['cheie'])->plaintext);
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
*/
    return $text;
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
    if ($mod=='j' && !strpos($locatie_bulk,',')) 
    { 
      return str_replace('/', ' ', strtolower($locatie_bulk)); 
    } elseif ($mod=='l' && !strpos($locatie_bulk,',')) { 
//      return str_replace(',','',strtolower($this->html_anunt->find('div.detalii_txt strong',0)->plaintext));
      return str_replace(',','',strtolower($locatie_bulk));
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
//      print_r($anunt);
      if ($this->verifica_anunt($anunt['anunt_id'])<1)
      {
        $this->db->insert('anunturi',$anunt);
        $this->scrie_jurnal('tocmai: am introdus anunt id '.$anunt['anunt_id']);
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
        $q_cauta_agentie=$this->db->from('anunturi');
        $q_cauta_agentie=$this->db->where('contact', $telefon);
        $q_cauta_agentie=$this->db->group_by(array('contact', 'tip', 'localitate'));
        $q_cauta_agentie=$this->db->get();
        $cauta_agentie=$q_cauta_agentie->result_array();
//        print_r($cauta_agentie);
        if (count($cauta_agentie)>0)
        {
          if (count($cauta_agentie)>1) 
          {
            $agentie='agentie';
          } 
          elseif (count($cauta_agentie)>0) 
          {
            if ($cauta_agentie[0]['count']>5)
            {
              $q_similar=$this->db->select('detalii');
              $q_similar=$this->db->or_where(array('contact' => $telefon, 'contact2' => $telefon));
              $q_similar=$this->db->get('anunturi');
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
        $q_insereaza=$this->db->query('INSERT IGNORE INTO contact (contact, tip) 
                                        VALUES (\''.$telefon.'\', \''.$agentie.'\') 
                                        ON DUPLICATE KEY UPDATE tip=\''.$agentie.'\'');
        $this->scrie_jurnal('tocmai: am introdus numarul: '.$telefon.' '.$agentie);
      }
    }
  }
  
  function verifica_anunt($anunt_id)
  {
    $where=array('anunt_id' => $anunt_id);
    $query=$this->db->get_where('anunturi',$where);
    if ($query->num_rows()>0) 
    {
      $this->scrie_jurnal('tocmai: anunt id '.$anunt_id.' duplicat');
      return 1;
    } else {
      return 0;
    }  
  }
  
  function verifica_suprafata($detalii)
  {
    $suprafata_arr=$this->html_anunt->find($this->ini['suprafata_arr']['tag']);
    foreach ($suprafata_arr as $suprafata)
    {
      if (strpos($suprafata->innertext, 'Suprafaţă')!=FALSE) 
      { 
        $return=$this->inlocuieste($suprafata->plaintext);
        $this->scrie_jurnal('tocmai: suprafata: '.$return);
        return $return; 
      }
    }
//    if($suprafata_arr) { return str_replace(',','',str_replace('mp','',str_replace('Suprafata: ','',$suprafata_arr->plaintext))); }
//    if($suprafata_arr!=NULL) { return $this->inlocuieste($suprafata_arr); }
    $count = strlen($detalii);
    $i = 0;
    $mie=0;
    $inceput=0;
    $sfarsit=0;
    $mp=0;
    while( $i < $count ) 
    {
      if( ctype_digit($detalii[$i]) ) 
      {
        if (!$inceput) $inceput=$i;
      } 
      elseif (strpos($detalii,'.',$i)==$i && $mie==0)
      {
        $mie=1;
      }
      elseif ($inceput && !ctype_digit($detalii[$i]) && $sfarsit<1)
      {
        $sfarsit=$i;
      }
      elseif (((strpos($detalii,'m',$i)==$i && strpos($detalii,'p',$i+1)==$i+1) || strpos($detalii,'m',$i)==$i) && $mp=0)
      {
        $mp=1;
      }
      elseif ($inceput+10 > $i && $inceput != 0 && $sfarsit > $inceput+2 && $mp=1)
      {
        return str_replace('.','',substr($detalii,$inceput,$sfarsit-$inceput));
      }
      elseif ($inceput+10 > $i && $inceput != 0 && $sfarsit > $inceput+1 && $mp=1)
      {
        $mie=0;
        $inceput=0;
        $sfarsit=0;
        $mp=0;
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
  
  function scrie_jurnal($mesaj)
  {
    file_put_contents($this->jurnal, date('d-m-Y H:i:s').' - '.$mesaj.PHP_EOL, FILE_APPEND | LOCK_EX);
  }

}

?>
