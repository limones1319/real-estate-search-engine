<?php

class Cauta extends CI_Model 
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
                            
  function cauta()
  {
    $intreaba=$this->db->get_where('anuntul_telefonic',array('localitate',$this->input->post('cauta_text')));
    return $intreaba->result();
  }

}
  
?>