<?php

class Ircd extends CI_Model 
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
                            
  function redirect($adresa)
  {
    $q_redirect=$this->db->where('id', $adresa['ircd']);
    $q_redirect=$this->db->get('anunturi');
    $redirect=$q_redirect->row_array();
//    print_r($adresa);
    $this->stocheaza_jurnal($redirect['anunt_id']);
    return $redirect;
  }
  
  function stocheaza_jurnal($anunt_id)
  {
    $arr=array('ip' => $this->session->userdata('ip_address'), 'sesiune' => $this->session->userdata('session_id'), 'anunt_id' => $anunt_id);
    $this->db->insert('redirect', $arr);  
  }
                   
}

?>
