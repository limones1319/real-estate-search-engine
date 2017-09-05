<?php

class Backup_db extends CI_Model 
{

  var $jurnal='application/logs/intrari.log';
  
  function __construct()
  {
    parent::__construct();
    $this->load->database();
    ini_set('MAX_EXECUTION_TIME', -1);
  }
                            
  function principal()
  {
    $this->scrie_jurnal('backup_db: Salvez tabelele...');
    $this->salveaza_tabelele();
    $this->scrie_jurnal('backup_db: Am salvat!');
  }
  
  function salveaza_tabelele()
  {
    $data=date('YmdHis');
    $this->db->query('CREATE TABLE zbak_anunturi_'.$data.' LIKE anunturi');
    $this->db->query('INSERT INTO zbak_anunturi_'.$data.' SELECT * FROM anunturi');
    $this->db->query('CREATE TABLE zbak_contact_'.$data.' LIKE contact');
    $this->db->query('INSERT INTO zbak_contact_'.$data.' SELECT * FROM contact');
  }
  
  function scrie_jurnal($mesaj)
  {
    file_put_contents($this->jurnal, date('d-m-Y H:i:s').' - '.$mesaj.PHP_EOL, FILE_APPEND | LOCK_EX);
  }
}

?>
