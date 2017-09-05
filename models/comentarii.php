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
    $q_comentarii=$this->db->get('comentarii');
//    $q_comentarii=$this->db->limit('1');
    $comentarii=$q_comentarii->row_array();
    return $comentarii;
  }
  
}

?>
