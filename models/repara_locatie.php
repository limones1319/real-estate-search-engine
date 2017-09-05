<?php

class Repara_locatie extends CI_Model 
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
    $_anunturi=$this->db->select('id, judet, localitate, detalii, data');
    $_anunturi=$this->db->get('anuntul_telefonic');
    $anunturi=$_anunturi->result_array();
    foreach ($anunturi as $cheie => $anunt)
    {
      if ($anunt['judet']==$anunt['localitate'])
      {
        $split=str_split($anunt['detalii']);
        foreach ($split as $key => $element)
        {
          if (ctype_upper($element)===FALSE) 
          {
            $sfarsit=$key;
            if (ctype_upper($split[$sfarsit+1])===TRUE && ctype_upper($split[$sfarsit+2])===TRUE)
            {
              $sfarsit=0;
            }
            elseif ($sfarsit>1)
            {
              $_modifica=$this->db->where('id', $anunt['id']);
              $_modifica=$this->db->update('anuntul_telefonic', array('localitate' => strtolower(substr($anunt['detalii'], 0, $sfarsit)), 'data' => $anunt['data']));
              echo 'actualizat '.$anunt['id'].' '.$anunt['judet'].' '.$anunt['localitate'].' '.substr($anunt['detalii'], 0, $sfarsit).'\n\r ';
              break;
            }
          }
        }
      }
    }
  }

}
