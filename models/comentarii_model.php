<?php

class Comentarii_Model extends CI_Model 
{

  function __construct()
  {
    parent::__construct();
  }
  
  function afiseaza_comentarii($cauta_text)
  {
    $q_comentarii=$this->db->where($cauta_text);
    $q_comentarii=$this->db->order_by('data', 'desc');
    $q_comentarii=$this->db->get('comentarii');
//    $q_comentarii=$this->db->limit('1');
    $comentarii=$q_comentarii->result_array();
//    print_r($comentarii);
    return $comentarii;
  }
  
  function afiseaza_ultimul($cauta_text)
  {
    $q_comentarii=$this->db->where($cauta_text);
    $q_comentarii=$this->db->order_by('data', 'desc');
    $q_comentarii=$this->db->get('comentarii');
//    $q_comentarii=$this->db->limit('1');
    $comentarii=$q_comentarii->row_array();
//    print_r($comentarii);
    return $comentarii;
  }
  
  function stocheaza_comentariu($comentariu, $anunt_id)
  {
    $data_arr=array( 
                    'comentariu' => $comentariu,
                    'anunt_id' => $anunt_id,
                    'sesiune' => $this->session->userdata('session_id'),
                    'adresa' => $this->session->userdata('ip_address'),
                    'publicat' => '1' 
                    );
    $q_stocheaza=$this->db->insert('comentarii', $data_arr);
    return $data_arr;
  }
  
}

?>
