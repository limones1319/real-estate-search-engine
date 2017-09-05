<?php

class Lansator extends CI_Model 
{
  var $jurnal='application/logs/intrari.log';
  var $pidfile='/var/run/ci_lansator.pid';

  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
    $this->load->database();
    ini_set('MAX_EXECUTION_TIME', -1);
    setlocale(LC_ALL, 'en_US.UTF-8');
  }
                            
  function principal()
  {
    $start=time();
    $pid=$this->verifica_proces();
    if ($pid===FALSE)
    {
      $pid=$this->scrie_pid();
    }
    else
    {
      $this->scrie_jurnal('lansator: ATENTIE: exista deja un lansator care ruleaza PID '.$pid);
      return FALSE;
    }
    $this->scrie_jurnal('lansator: START: incep sa lansez taratoarele.PID '.$pid);
    $this->lanseaza_urluri();
    $this->scrie_jurnal('lansator: STOP: taratoarele s-au intors acasa.');
    $stop=time();
    $sters=$this->sterge_pid();
    if ($sters===FALSE) $this->scrie_jurnal('lansator: nu am putut sterge fisierul ci_lansator.pid');
    $this->scrie_jurnal('lansator: DURATA: '.date('H:i:s',$stop-$start));
  }
  
  function sterge_pid()
  {
    return unlink($this->pidfile);
  }
  
  function scrie_pid()
  {
    $filename = $this->pidfile;
    $handle = fopen($filename, "w");
    $scris=fwrite($handle, getmypid());
    fclose($handle);
    return getmypid();
  }
  
  function verifica_proces()
  {
    $filename = $this->pidfile;
    $handle = fopen($filename, "r");
    if ($handle !== FALSE)
    {
      $contents = fread($handle, filesize($filename));
      fclose($handle);
      return $contents;
    }
    else
    {
      return FALSE;
    }
  }
    
  function lanseaza_urluri()
  {
    foreach ($this->descarca_urluri() as $url)
    {
      while($this->verifica_instante()>2)
      {
        sleep(600);
      }
      $exec='php-cgi index.php c=fintern m=tarator url_id='.$url['id'].' pagini_procesate='.$url['pagini_procesate'].' > /dev/null 2>/dev/null &';
      exec($exec);
      $this->scrie_jurnal('lansator: am lansat '.$exec);
      sleep(60);
    }
    while($this->numar_instante_blocate()>0)
    {
      foreach ($this->descarca_instante_blocate() as $url)
      {
        while($this->verifica_instante()>2)
        {
          sleep(600);
        }
        $exec='php-cgi index.php c=fintern m=tarator url_id='.$url['id'].' pagini_procesate='.$url['pagini_procesate'].' > /dev/null 2>/dev/null &';
        exec($exec);
        $this->scrie_jurnal('lansator: am lansat '.$exec);
        sleep(60);
      }
    }
  }
  
  function descarca_urluri()
  {
    $urluri=$this->db->where('server', gethostbyname(gethostname()));
    $urluri=$this->db->where('blocat', '0');
    //$urluri=$this->db->order_by('id', 'desc');
    $urluri=$this->db->order_by('RAND()');
    $urluri=$this->db->get('url');
    return $urluri->result_array();
  }
  
  function verifica_instante()
  {
    $_instante=$this->db->select('count(id) as count');
    $_instante=$this->db->where('server', gethostbyname(gethostname()));
    $_instante=$this->db->where('blocat','1');
    $_instante=$this->db->where('timp_actualizat >', time()-1200);
    $_instante=$this->db->get('url');
    $instante=$_instante->row_array();
    return $instante['count'];
  }
      
  function descarca_instante_blocate()
  {
    $_instante=$this->db->where('server', gethostbyname(gethostname()));
    $_instante=$this->db->where('blocat','1');
    $_instante=$this->db->where('timp_actualizat <', time()-1200);
    $_instante=$this->db->order_by('RAND()');
    $_instante=$this->db->get('url');
    $instante=$_instante->result_array();
    return $instante;
  }
      
  function numar_instante_blocate()
  {
    $_instante=$this->db->select('count(id) as count');
    $_instante=$this->db->where('server', gethostbyname(gethostname()));
    $_instante=$this->db->where('blocat','1');
    //$_instante=$this->db->where('timp_actualizat <', time()-600);
    $_instante=$this->db->get('url');
    $instante=$_instante->row_array();
    return $instante['count'];
  }
      
  function scrie_jurnal($mesaj)
  {
    file_put_contents($this->jurnal, date('d-m-Y H:i:s').' - '.$mesaj.PHP_EOL, FILE_APPEND | LOCK_EX);
  }
}

?>
