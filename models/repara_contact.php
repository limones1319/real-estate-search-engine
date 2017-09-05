<?php

class Repara_contact extends CI_Model 
{

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
    $this->descarca_anunturi();
  }
  
  function salveaza_tabelele()
  {
    $data=date('YmdHis');
    $this->db->query('CREATE TABLE zbak_anuntul_telefonic_'.$data.' LIKE anuntul_telefonic');
    $this->db->query('INSERT INTO zbak_anuntul_telefonic_'.$data.' SELECT * FROM anuntul_telefonic');
    $this->db->query('CREATE TABLE zbak_anuntul_telefonic_contact_'.$data.' LIKE anuntul_telefonic_contact');
    $this->db->query('INSERT INTO zbak_anuntul_telefonic_contact_'.$data.' SELECT * FROM anuntul_telefonic_contact');
  }
  
  function descarca_anunturi()
  {
    $telefoane=$this->db->get('anuntul_telefonic_contact');
    $agentie='particular';

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

}
