<?php

class Tarator extends CI_Model 
{
  var $anunt_id;
  var $judet;
  var $localitate;
  var $detalii;
  var $pret;
  var $site;
  var $email;
  var $contact;
  var $contact2;
  var $suprafata;
  var $data;
  
  var $temporar;
  var $temporar1;
  var $temporar2;
  var $temporar3;
    
  var $html;
  var $html_anunt;
  var $anunturi=array();
  var $duplicate=0;
  var $anunturi_numarate=0;
  var $pagini=0;
  var $anunturi_pagina=0;
  var $url_id;
  var $url;
  var $pagini_procesate=FALSE;
  var $host;  
  var $ini=array();
  var $debug=0;
  var $test=0;
  var $tip=0;
  var $db_localitate;
  var $db_judet;
  var $locatii_invalide;
  
  var $opreste_algoritm=FALSE;
  var $proxy_enum=0;
  var $proxy=array();
  
  var $jurnal='application/logs/intrari.log';
  var $ace=array( 46,
                  44,
                  58,
                  59,
                  47,
                  128
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
    $this->locatii_invalide=$this->descarca_locatii_invalide();
    $this->db_localitate=$this->descarca_locatii('localitate');
    $this->db_judet=$this->descarca_locatii('judet');
    $this->proxy=$this->config->item('proxy_tarator');
  }
                            
  function principal($variabile)
  {
    $start=time();
    $this->url_id=$variabile['url_id'];
    $this->pagini_procesate=$variabile['pagini_procesate'];
    if (empty($variabile['debug'])===FALSE) $this->debug=$variabile['debug'];
    if (empty($variabile['test'])===FALSE) $this->test=$variabile['test'];
    $this->marcheaza_pagina();
    $this->scrie_jurnal('tarator['.$this->url_id.']: START: incep sesiunea de colectare.');
    $anunturi=$this->descarca_urluri($variabile);
    $this->scrie_jurnal('tarator['.$this->url_id.']: STOP: am terminat sesiunea de colectare.');
    $stop=time();
    $this->scrie_jurnal('tarator['.$this->url_id.']: DURATA: '.($stop-$start));
    if($anunturi===FALSE)
    {
      return FALSE;
    }
    else
    {
      $_blocheaza=$this->db->update('url', array('blocat' => '0'), array('id' => $this->url_id));
      $_blocheaza=$this->db->update('url', array('pagini_procesate' => '0'), array('id' => $this->url_id));
      $_blocheaza=$this->db->update('url', array('timp_actualizat' => '0'), array('id' => $this->url_id));
      //print_r($anunturi);
      return $anunturi;
    }
  }
  
  function verificare($variabile)
  {
    $_rezultat=$this->db->query('SELECT * FROM (SELECT * FROM url WHERE blocat>-1 ORDER BY RAND()) AS t GROUP BY sit');
    $rezultat=$_rezultat->result_array();
    foreach($rezultat as $id)
    {
      $variabile['url_id']=$id['id'];
      if (empty($variabile['debug'])==TRUE) $variabile['debug']=0;
      if (empty($variabile['pagini_procesate'])==TRUE) $variabile['pagini_procesate']=0;
      $variabile['test']=1;
      $anunturi[$id['sit']]=$this->principal($variabile);
    }
    return $anunturi;
  }
  
  //Descarca pagina din baza de date
  function descarca_urluri($variabile)
  {
    $urluri=$this->db->where('id', $variabile['url_id']);
    $urluri=$this->db->get('url');
    $url=$urluri->row_array();
    $this->tip=$url['tip'];
    $pagina_descarcata=FALSE;
    $this->sterge_cookie();
    while($pagina_descarcata===FALSE)
    {
      $pagina_descarcata=$this->descarca_url(NULL, $url['url']);
      if (empty($pagina_descarcata)===TRUE) 
      {
        //$this->scrie_jurnal ('tarator['.$this->url_id.']: EROARE: nu am putut descarca pagina '.$url['url']);
        $this->marcheaza_pagina();
        $this->schimba_proxy();
        $this->sterge_cookie();
        $pagina_descarcata=FALSE;
      }
    }
    $html=str_get_html($pagina_descarcata);
    $anunturi=$this->procesator($url['algoritm'], $html);
    $this->scrie_jurnal('tarator['.$this->url_id.']: duplicate='.$this->duplicate.' anunturi='.$this->anunturi_numarate.' pagini='.$this->pagini.' anunturi/pagina='.$this->anunturi_pagina);
    //print_r($anunturi);
    //echo $html->plaintext;
    return $anunturi;
  }
  
  function procesator($variabila, $_rezultat)
  {
    $separa_functiile=explode(';', $variabila);
    foreach($separa_functiile as $expresie)
    {
      if (strlen($expresie)<3) continue;
      $separa_expresia=explode('(', $expresie);
      $functie=$this->curata($separa_expresia[0], NULL);
      $argumente=$this->curata($separa_expresia[1], NULL);
      if(stripos($argumente, ',')!==FALSE)
      {
	$separa_argumente=explode(',', $argumente);
	switch (count($separa_argumente))
	{
	  case 2:
	    $_rezultat=$this->$functie($_rezultat, $separa_argumente[0], $separa_argumente[1]);
	    break;
          case 3:
            $_rezultat=$this->$functie($_rezultat, $separa_argumente[0], $separa_argumente[1], $separa_argumente[2]);
            break;
          case 4:
            $_rezultat=$this->$functie($_rezultat, $separa_argumente[0], $separa_argumente[1], $separa_argumente[2], $separa_argumente[3]);
            break;
          case 5:
            $_rezultat=$this->$functie($_rezultat, $separa_argumente[0], $separa_argumente[1], $separa_argumente[2], $separa_argumente[3], $separa_argumente[4]);
            break;
          case 6:
            $_rezultat=$this->$functie($_rezultat, $separa_argumente[0], $separa_argumente[1], $separa_argumente[2], $separa_argumente[3], $separa_argumente[4], $separa_argumente[5]);
            break;
        }
      }
      else 
      {
	$_rezultat=$this->$functie($_rezultat, $argumente);
      }
      if ($this->opreste_algoritm===TRUE) 
      {
        $this->opreste_algoritm=FALSE;
        break;
      }
    }
    return $_rezultat;
  }

  function descarca_anunturi($rezultat, $pagina, $tag, $sit, $inceput=1, $baza_url='', $trailing_slash='')
  {
    $baza_url_pagini=$rezultat['url'];
    $ultima_pagina=$rezultat['ultima_pagina'];
    if($this->pagini_procesate>0)
    {
      $inceput=$this->pagini_procesate;
    }
    if ($this->test==1)
    {
      $ultima_pagina=$inceput+1;
    }
    for ($i=$inceput; $i<$ultima_pagina; $i++)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: incarc pagina '.$baza_url_pagini.$pagina.$i.$trailing_slash);
      
      //$this->sterge_cookie();
      $pagina_descarcata=$this->descarca_url(NULL, $baza_url_pagini.$pagina.$i.$trailing_slash);
      if (empty($pagina_descarcata)===TRUE) 
      {
        //$this->scrie_jurnal ('tarator['.$this->url_id.']: EROARE: nu am putut descarca pagina '.$baza_url_pagini.$pagina.$i.$trailing_slash);
        $this->schimba_proxy();
        $this->sterge_cookie();
        $i--;
        continue;
      }
      $html_pagina = str_get_html($pagina_descarcata);
      $lista = $html_pagina->find($tag);
      if (empty($lista)===TRUE) 
      {
        $this->scrie_jurnal('tarator['.$this->url_id.']: EROARE: nu gasesc anunturi pe pagina!');
        continue;
      }
      foreach ($lista as $cheie => $a)
      {
        $lista_urluri[$cheie]=$a->href;
      }
      $descarcat=$this->cauta_anunturi($lista_urluri, $sit, $baza_url);
      if($descarcat===FALSE)
      {
        //$this->scrie_jurnal ('tarator['.$this->url_id.']: EROARE: reincarc pagina '.$baza_url_pagini.$pagina.$i.$trailing_slash);
        $this->schimba_proxy();
        $this->sterge_cookie();
        $i--;
        continue;
      }
      $anunturi[]=$descarcat;
      $this->pagini++;
      unset ($lista_urluri);
      $this->marcheaza_pagina($i);
      //print_r($anunturi);
      if($this->duplicate>80) 
      {
        $this->scrie_jurnal ('tarator['.$this->url_id.']: DUPLICATE: am depasit 80 de duplicate ');
        break;
      }
    }
    return $anunturi;
  }
  
  function marcheaza_pagina($pagina=NULL)
  {
    if($pagina===NULL)
    {
      $_pagina=$this->db->where('id', $this->url_id);
      $_pagina=$this->db->get('url');
      $temp=$_pagina->row_array();
      $pagina=$temp['pagini_procesate'];
    }
    $_marcaj=$this->db->update('url', array('blocat' => '1'), array('id' => $this->url_id));
    $_marcaj=$this->db->update('url', array('pagini_procesate' => $pagina), array('id' => $this->url_id));
    $_marcaj=$this->db->update('url', array('timp_actualizat' => time()), array('id' => $this->url_id));
  }
  
  function cauta_anunturi($lista, $sit, $baza_url='')
  {
    $_taguri=$this->db->where('sit', $sit);
    $_taguri=$this->db->where('algoritm <>', 'NULL');
    $_taguri=$this->db->order_by('ordine', 'ASC');
    $_taguri=$this->db->get('taguri');
    $taguri=$_taguri->result_array();
    $i=0;
    foreach ($lista as $url_anunt)
    {
      $this->url=$baza_url.$url_anunt;      
      $descarcat=$this->descarca_url(NULL, $baza_url.$url_anunt);
      if($descarcat===FALSE) 
      {
/*        $this->scrie_jurnal ('tarator['.$this->url_id.']: EROARE: nu am putut descarca anuntul '.$this->url);
        if($i>5)
        {
          return FALSE;
        }
        else
        {
          $i++;*/
          continue;
//        }
      }
      //$this->html_anunt=str_get_html($descarcat);
      $html=$this->incarca_str_html($descarcat);

      $rezultat['url']=$baza_url.$url_anunt;
      $rezultat['sursa']=$sit;
      $rezultat['tip']=$this->tip;
      foreach ($taguri as $tag)
      {
        $rezultat[$tag['variabila']]=$this->inlocuieste_diacritice($this->procesator($tag['algoritm'], $html), NULL);
        $this->{$tag['variabila']}=$rezultat[$tag['variabila']];
      }
      $anunturi[]=$rezultat;
    }
    if ($this->test!=1)
    {
      $this->stocheaza_anunturi($anunturi);
    }
    else
    {
      //$this->stocheaza_anunturi($anunturi);
      return $anunturi;
    }
  }
  
  function sterge_cookie()
  {
    unlink(FCPATH."application/cache/cookie".$this->url_id.".txt");
  }
    
  function descarca_locatii($coloana)
  {
    $_rezultate=$this->db->select('TRIM('.$coloana.') AS '.$coloana);
    $_rezultate=$this->db->having('LENGTH(`'.$coloana.'`)>4');
    $_reziltate=$this->db->order_by('COUNT('.$coloana.') DESC');
    $_rezultate=$this->db->group_by($coloana);
    $_rezultate=$this->db->get('anunturi');
    $rezultate=$_rezultate->result_array();
    //$this->db_localitati=$rezultate;
    foreach($rezultate as $cheie => $rezultat)
    {
      if(array_search($this->curata($rezultat[$coloana]),$this->locatii_invalide)!==FALSE)
      {
        unset($rezultate[$cheie]);
      }
    }
    //echo $this->db->last_query();
    //print_r($rezultate);
    return $rezultate;
  }
  
  function descarca_locatii_invalide()
  {
    $_invalide=$this->db->select('locatie');
    $_invalide=$this->db->get('locatii_invalide');
    $invalide=$_invalide->result_array();
    foreach ($invalide as $cheie => $invalid)
    {
      $retur[]=$invalid['locatie'];
    }
    //print_r($retur);
    return $retur;
  }
    
  function incarca($rezultat=NULL, $variabila)
  {
    return $this->{$variabila};
  }
  
  function transforma_in_text($rezultat, $null=NULL)
  {
    return $rezultat->plaintext;
  }
  
  function extrage_tag($rezultat, $tag)
  {
    return $rezultat->{$tag};
  }
  
  function incarca_variabila($rezultat, $variabila)
  {
    $rezultat=$this->{$variabila};
    return $rezultat;
  }
  
  function opreste_algoritm($rezultat, $functie, $conditie)
  {
    if($this->$functie($rezultat)===(bool)$conditie)
    {
      $this->opreste_algoritm=TRUE;
    }
    else
    {
      $this->opreste_algoritm=FALSE;
    }

    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: opreste_algoritm '.$rezultat.' cu '.((bool)$conditie ? 'TRUE' : 'FALSE').', oprit '.((bool)$this->opreste_algoritm ? 'TRUE' : 'FALSE'));
    }

    return $rezultat;
  }
  
  function este_gol($rezultat, $null=NULL)
  {
    $retur=empty($rezultat);
    
    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: este_gol '.$rezultat.' returneaza '.((bool)$retur ? 'TRUE' : 'FALSE'));
    }

    return $retur;
  }
  
  function este_numar($rezultat, $null=NULL)
  {
    $retur=is_numeric($rezultat);
    
    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: este_numar '.$rezultat.' returneaza '.((bool)$retur ? 'TRUE' : 'FALSE'));
    }
    
    return $retur;
  }
  
  function stocheaza($rezultat, $tag)
  {
    $this->{$tag}=$rezultat;
    return $rezultat;
  }
  
  function identifica_db($rezultat, $coloana)
  {
    $_url=str_replace('-',' ',$this->url);
    $locatii='db_'.$coloana;
    if(empty($rezultat)===TRUE OR array_search($this->curata($rezultat),$this->locatii_invalide)!==FALSE)
    {
      foreach($this->{$locatii} as $locatie)
      {
        //echo '"'.$locatie[$coloana].'" "'.array_search($this->curata($locatie[$coloana]),$this->locatii_invalide).'"<br />';
        if(array_search($this->curata($locatie[$coloana]),$this->locatii_invalide)===FALSE AND stripos(strtolower($this->detalii),$locatie[$coloana])!==FALSE)
        {
          echo $this->anunt_id.' am gasit in detalii '.$locatie[$coloana].'<br />';
          $gasit=$locatie[$coloana];
          return $gasit;
        }
/*        elseif(array_search($this->curata($locatie[$coloana]),$this->locatii_invalide)===FALSE AND stripos(strtolower($_url),$locatie[$coloana])!==FALSE)
        {
          $gasit=$locatie[$coloana];
          $rezultat=$gasit;
        }*/
      }
    }
    else
    {
      foreach($this->{$locatii} as $locatie)
      {
        if(stripos(strtolower($rezultat),$locatie[$coloana])!==FALSE AND array_search($this->curata($rezultat),$this->locatii_invalide)===FALSE)
        {
          //echo $this->anunt_id.' am gasit in rezultat '.$locatie[$coloana].'<br />';
          $gasit=$locatie[$coloana];
          return $gasit;
        }
      }
    }
    return FALSE;
  }
    
  function inlocuieste_spatii($rezultat, $null=NULL, $cu='')
  {
    $inlocuit=str_replace(' ', $cu, $rezultat);
    return $inlocuit;
  }
  
  function intreg($rezultat, $null=NULL)
  {
    $retur=(int)$rezultat;
    return intval($retur);
  }
  
  function incarca_str_html($rezultat, $null=NULL)
  {
    $this->html_anunt=str_get_html($rezultat);
    //echo $html.'<br />';
    return $this->html_anunt;
  }
  
  function uneste_temp($rezultat=NULL, $null=NULL)
  {
    return $rezultat.$this->temporar.$this->temporar1.$this->temporar2.$this->temporar3;
  }
  
  function descarca_url($rezultat=NULL, $url=NULL, $trailing_slash=NULL)
  {
    if($rezultat!==NULL) 
    {
      $curl=$url.$rezultat.$trailing_slash;
    }
    else
    {
      $curl=$url.$trailing_slash;
    }
    //echo $curl.'<br />';
    $retry=0;
    while (empty($string)===TRUE AND $retry<2)
    {
      //if ($retry>0) $this->sterge_cookie();
      sleep(5);
      $ch = curl_init();  
      curl_setopt($ch, CURLOPT_URL, $curl);
      curl_setopt($ch, CURLOPT_HEADER, FALSE);
      curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)');
      curl_setopt($ch, CURLOPT_COOKIEJAR, FCPATH."application/cache/cookie".$this->url_id.".txt");
      curl_setopt($ch, CURLOPT_COOKIEFILE, FCPATH."application/cache/cookie".$this->url_id.".txt"); //saved cookies
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_VERBOSE, TRUE);
      curl_setopt($ch, CURLOPT_PROXYTYPE, 7);
      curl_setopt($ch, CURLOPT_PROXY, $this->proxy[$this->proxy_enum]['ip'].":".$this->proxy[$this->proxy_enum]['port']);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100);
      curl_setopt($ch, CURLOPT_DNS_USE_GLOBAL_CACHE, FALSE );
      $string = curl_exec ($ch);  
      $error=curl_errno($ch);
      $info=curl_getinfo($ch);
      if ($error!==0) 
      {
        $this->scrie_jurnal ('tarator['.$this->url_id.']: EROARE: nu am putut descarca pagina '.$error.' '.$info['url'].' '.$info['http_code']);
        return FALSE;
        //$this->schimba_circuit();
      } 
      elseif($this->debug==1)
      {
        $this->scrie_jurnal ('tarator['.$this->url_id.']: am incarcat pagina '.$error.' '.$info['url'].' '.$info['http_code']);
        //$this->schimba_circuit();
      } 
      
      curl_close ($ch); 
      $retry++;
    }
    //echo $error.'<br />'; 
    //echo $string;
    return $string;
  }
  
  function schimba_proxy()
  {
    $this->schimba_circuit();
    $this->proxy_enum++;
    if ($this->proxy_enum>3) $this->proxy_enum=0;
    $this->scrie_jurnal ('tarator['.$this->url_id.']: PROXY: schimb proxy '.$this->proxy[$this->proxy_enum]['ip'].':'.$this->proxy[$this->proxy_enum]['cport']);
    for($i=0; $i<rand(0,2); $i++)
    {
      $this->marcheaza_pagina();
      sleep(70);
    }
  }
  
  function schimba_circuit()
  {
    $fp=fsockopen($this->proxy[$this->proxy_enum]['ip'],$this->proxy[$this->proxy_enum]['cport']);
    if($fp===FALSE)
    {
      $this->scrie_jurnal ('tarator['.$this->url_id.']: nu am putut sa schimb circuitul ');
      return FALSE;
    }
    fwrite($fp,"AUTHENTICATE \"7uv4ngur4!\"\r\n");
    $raspuns=fread($fp, 1024);
    fwrite($fp,"SIGNAL NEWNYM \r\n");
    $raspuns=fread($fp, 1024);
    fclose($fp);
    //$this->sterge_cookie();
    $this->scrie_jurnal ('tarator['.$this->url_id.']: am schimbat circuitul: '.$raspuns);
    return TRUE;
  }
  
  function returneaza($rezultat, $returneaza)
  {
    return $returneaza;
  }
  
  function analizeaza_url($rezultat, $url=NULL)
  {
    if($url=='NULL') $url='';
    //echo $rezultat.'<br />';
    $url_analizat=parse_url($url.$rezultat);

    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: analizeaza_url '.$rezultat.' si returnez '.$url_analizat);
    }

    return $url_analizat;
  }
  
  function analizeaza_string($rezultat, $null)
  {
    if (empty($rezultat['query'])===FALSE)
    {
      parse_str(html_entity_decode($rezultat['query']), $string_analizat);
    }
    else
    {
      parse_str($rezultat[1], $string_analizat);
    }

    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: analizeaza_string '.$rezultat.' si returnez '.$string_analizat);
    }

    return array('url' => $rezultat, 'query' => $string_analizat);
  }
  
  function separa_cale($rezultat, $separator, $cheie)
  {
    $retur=explode($separator, $rezultat[$cheie]);
    return array('url' => $rezultat, 'path' => $retur);
  }
  
  function ultima_pagina($rezultat, $pagina, $cheie)
  {
    foreach ($rezultat[$cheie] as $key => $variabila)
    {
      if($key===$pagina)
      {
        $ultima_pagina=$variabila;
        unset ($rezultat[$cheie][$key]);
      }
      elseif (stripos($variabila, $pagina)!==FALSE)
      {
        $ultima_pagina=str_replace($pagina, '', $variabila);
        unset ($rezultat[$cheie][$key]);
      }
    }

    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: ultima_pagina '.implode('|',$rezultat).' si returnez '.implode('|',$rezultat['url']).', '.implode('|',$rezultat[$cheie]).', '.$ultima_pagina);
    }

    return array('url' => $rezultat['url'], $cheie => $rezultat[$cheie], 'ultima_pagina' => $ultima_pagina);
  }
  
  function uneste_cale($rezultat, $separator, $cheie)
  {
    $rezultat['url']['path']=implode($separator, $rezultat[$cheie]);

    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: uneste_cale '.$rezultat.' si returnez '.$rezultat['url']['path'].', '.$separator);
    }

    return array('url' => $rezultat['url'], 'ultima_pagina' => $rezultat['ultima_pagina']);
  }
  
  function construieste_query($rezultat, $null)
  {
    $rezultat['url']['query']=http_build_query($rezultat['query']);

    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: construieste_query '.$rezultat.' si returnez '.$rezultat['url'].', '.$rezultat['ultima_pagina']);
    }

    return array('url' => $rezultat['url'], 'ultima_pagina' => $rezultat['ultima_pagina']);
  }
  
  function construieste_url($rezultat, $null)
  {
    $url=http_build_url($rezultat['url']);

    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: construieste_url '.$rezultat.' si returnez '.$url.', '.$rezultat['ultima_pagina']);
    }

    return array('url' => $url, 'ultima_pagina' => $rezultat['ultima_pagina']);
  }
  
  function recunoaste($rezultat, $null=NULL)
  {
    if($rezultat===FALSE) return FALSE;
    //echo $rezultat;
    $img = FCPATH.'application/cache/imagine_ocr.gif';
    //file_put_contents($img, file_get_contents($rezultat));
    $bytes=file_put_contents($img, $this->descarca_url(NULL,$rezultat));
    $tocr=new TesseractOCR();
    $text=$tocr->recognize($img);

    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: recunoaste '.$rezultat.' si returnez '.$text);
    }

    return $text;
  }
  
  function data($rezultat, $format)
  {
    return date($format);
  }

  function extrage($rezultat, $paragraf_inceput, $paragraf_sfarsit, $atribut)
  {
    $inceput=stripos($rezultat, $paragraf_inceput);
    $sfarsit=stripos($rezultat, $paragraf_sfarsit);
    $detalii_cu_html=substr($rezultat, $inceput, $sfarsit-$inceput);
    $html=str_get_html($detalii_cu_html);
    $detalii=str_replace('&nbsp;', ' ', $html->$atribut);
    return $detalii;
  }

  function alege($rezultat, $numar, $implicit=FALSE)
  {
    if(empty($rezultat)===TRUE)
    {
      $retur=FALSE;
    }
    elseif ($numar=='ultimul')
    {
      $retur=end($rezultat);
    }
    elseif (count($rezultat)-1<$numar)
    {
      $retur=$implicit;
    }
    elseif ($numar<0)
    {
      //print_r($rezultat);
      $retur=$rezultat[count($rezultat)-1];
    }
    else
    {
      $retur=$rezultat[$numar];
    }
    
    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: alege '.$numar.' din '.implode('|',$rezultat).' si obtin '.$retur);
    }

    return $retur;
  }

  function inlocuieste($rezultat, $inlocuieste, $cu, $chr=NULL)
  {
    if(empty($rezultat)===TRUE)
    {
      return FALSE;
    }
    elseif ($chr=='chr')
    {
      $inlocuit=str_replace(chr($inlocuieste), chr($cu), $rezultat);
    }
    else
    {
      $inlocuit=str_replace($inlocuieste, $cu, $rezultat);
    }

    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: inlocuieste '.$inlocuieste.' cu '.$cu.' din '.$rezultat.' si obtin '.$inlocuit);
    }

    return $inlocuit;
  }

  function identifica($rezultat, $identificator, $atribut, $implicit=0)
  {
    if(empty($rezultat)===TRUE)
    {
      $implicit=FALSE;
    }
    elseif($atribut!=='NULL')
    {
      foreach ($rezultat as $rand)
      {
	if(stripos($rand->{$atribut}, $identificator)!==FALSE) 
	{ 
	  $implicit=$rand->{$atribut}; 
	  break;
        }
      }
    }
    elseif(count($rezultat)<2) 
    {
      $implicit=$rezultat[0];
    }
    else
    {
      foreach ($rezultat as $rand)
      {
	if(stripos($rand, $identificator)!==FALSE) 
	{
	  $implicit=$rand;
	  break;
        }
      }
    }

    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: identifica '.$identificator.' din '.implode('|',$rezultat).' si gasesc '.$implicit);
    }

    return $implicit;
  }

  function separa($rezultat, $separator)
  {
    if(empty($rezultat)===TRUE)
    {
      return FALSE;
    }
    elseif (stripos($rezultat,chr($separator))!==FALSE)
    {
      //echo chr($separator);
      $retur=explode(chr($separator), $rezultat);
    }
    else
    {
      $retur[]=$rezultat;
    }
    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: am separat '.$rezultat.' cu '.$separator.' si am obtinut '.implode('|',$retur));
    }
    //print_r($retur);
    return $retur;
  }

  function curata($rezultat, $null=NULL)
  {
    //echo $rezultat.'<br />';
    if(empty($rezultat)===TRUE)
    {
      return FALSE;
    }

    for($i=0; $i<32; $i++)
    {
      $rezultat=str_replace(chr($i), '', $rezultat);
    }

    return trim($rezultat, " \t\n\r\0\x0B\"()");
    //$retur=str_replace(')','',$rezultat);
    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: murdar '.$rezultat.' curat '.$retur);
    }
    return $retur;
  }

  function cauta($rezultat, $tag, $cheie, $atribut, $implicit=NULL)
  {
    //echo $tag.$atribut.$cheie.'<br />';
    //print_r($rezultat);
    //echo $rezultat->$atribut;
    if(empty($rezultat)===TRUE)
    {
      return FALSE;
    }
    $verifica=$rezultat->find($tag,$cheie);
    //echo 'am gasit: '.$verifica->plaintext.'<br />';
    if (empty($verifica)===FALSE)
    {
      if($cheie<0)
      {
        $gasit=$rezultat->find($tag);
      }
      else 
      {
        $gasit=$rezultat->find($tag, $cheie)->{$atribut};      
      }
    }
    else 
    {
      if ($implicit=='rezultat') { $gasit=$$implicit; } else { $gasit=$implicit; }
    }
    if ($this->debug==1)
    {
      $this->scrie_jurnal('tarator['.$this->url_id.']: am cautat '.$tag.' si am gasit '.$gasit);
    }
    //echo $gasit.'<br />,<br />';
    return $gasit;
  }

  function litere_mici($rezultat, $null=NULL)
  {
    if(empty($rezultat)===TRUE)
    {
      return FALSE;
    }
    return strtolower($rezultat);
  }
    
  function inlocuieste_array($rezultat, $inlocuitor='')
  {
    if(empty($rezultat)===TRUE)
    {
      return FALSE;
    }
    foreach ($this->ace as $ac)
    {
      $rezultat=str_replace(chr($ac), $inlocuitor, $rezultat);
    }
    return strtolower($rezultat);
  }
  
  function inlocuieste_diacritice($rezultat, $null)
  {
    if(empty($rezultat)===TRUE)
    {
      return FALSE;
    }
/*
    foreach ($this->diacritice as $diacritica => $substitut)
    {
      $sir=str_replace($diacritica, $substitut, $sir);
    }
*/
    $trans = iconv('UTF-8', 'ASCII//TRANSLIT', $rezultat);
    return $trans;
  }
  
//Catalogheaza numarul de telefon ca agentie sau particular, dupa care stocheaza anuntul in baza de date.

  function stocheaza_anunturi($anunturi)
  {
    foreach ($anunturi as $anunt)
    {
      if ($this->verifica_anunt($anunt['anunt_id'], $anunt['sursa'])<1)
      {
        $this->stocheaza_contact($anunt);
        $this->db->insert('anunturi',$anunt);
        $this->scrie_jurnal('tarator['.$this->url_id.']: am introdus anunt id '.$anunt['anunt_id']);
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
//        $q_cauta_agentie=$this->db->from('anunturi');
        $q_cauta_agentie=$this->db->where('contact', $telefon);
        $q_cauta_agentie=$this->db->group_by(array('contact', 'tip', 'localitate'));
        $q_cauta_agentie=$this->db->get('anunturi');
        $cauta_agentie=$q_cauta_agentie->result_array();
//        print_r($cauta_agentie);
        if (count($cauta_agentie)>0)
        {
          if (count($cauta_agentie)>3) 
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
        $this->scrie_jurnal('tarator['.$this->url_id.']: am introdus numarul: '.$telefon.' '.$agentie);
      }
    }
  }
  
  function verifica_anunt($anunt_id, $sursa)
  {
    $where=array(
                  'anunt_id' => $anunt_id,
                  'sursa' => $sursa
                  );
    $query=$this->db->get_where('anunturi',$where);
    if ($query->num_rows()>0) 
    {
      //$this->scrie_jurnal('tarator['.$this->url_id.']: anunt id '.$anunt_id.' duplicat');
      $this->duplicate++;
      return 1;
    } else {
      $this->duplicate=0;
      return 0;
    }  
  }
  
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
