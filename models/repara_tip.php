<?php

class Repara_tip extends CI_Model 
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
    $this->db->query('CREATE TABLE zbak_anunturi_'.$data.' LIKE anunturi');
    $this->db->query('INSERT INTO zbak_anunturi_'.$data.' SELECT * FROM anunturi');
    $this->db->query('CREATE TABLE zbak_contact_'.$data.' LIKE contact');
    $this->db->query('INSERT INTO zbak_contact_'.$data.' SELECT * FROM contact');
  }
  
  function descarca_anunturi()
  {
    $_tipuri=$this->db->select('url, tip');
    $_tipuri=$this->db->where('sit', 'anuntul_t');
    $_tipuri=$this->db->get('url');
    $tipuri=$_tipuri->result_array();
//    print_r($tipuri);

    foreach ($tipuri as $tip)
    {
      $trunchiat=str_replace('http://www.anuntul.ro/anunturi-imobiliare-vanzari/', '', $tip['url']);
      $tip_final=str_replace('/', '', $trunchiat);
      $ace[]=array('tip' => $tip['tip'], 'string' => $tip_final);
    }
    
    $_anunturi=$this->db->select('id, url, tip');
    $_anunturi=$this->db->where('tip', '0');
    $_anunturi=$this->db->get('anunturi');
    $anunturi=$_anunturi->result_array();
    
    foreach ($anunturi as $cheie => $anunt)
    {
      foreach ($ace as $ac)
      {
        if (strstr($anunt['url'], $ac['string'])!=FALSE)
        {
          $anunturi[$cheie]['tip']=$ac['tip'];
          //echo $anunturi[$cheie]['tip'];
        }
      }
    }
    $actualizeaza=$this->db->update_batch('anunturi', $anunturi, 'id');
    return $tipuri;
  }

}
