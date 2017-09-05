<?php

class Comentarii extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('form', 'url');
    $this->load->database();
    $this->load->library('form_validation');  
    $this->load->library('session');
    }
  
  public function afiseaza()
  {
    $cauta_text=$this->uri->uri_to_assoc();
//    print_r($cauta_text);
    $this->load->model('comentarii_model');
    $data['comentarii']=new Comentarii_Model();
    $data['comentarii']=$this->comentarii_model->afiseaza_comentarii($cauta_text);
    $this->load->view('comentarii/afiseaza_comentarii.php', $data);
  }

  public function stocheaza()
  {
    $this->form_validation->set_rules('comentariu', 'Text', 'required');
    if ($this->form_validation->run() == FALSE)
    {
      return;
    }
    else
    {
      $comentariu=$this->input->post('comentariu');
      $anunt_id=$this->input->post('anunt_id');
    }
//    print_r($cauta_text);
    $this->load->model('comentarii_model');
    $data['comentarii']=new Comentarii_Model();
    $stocat=$this->comentarii_model->stocheaza_comentariu($comentariu, $anunt_id);
    $data['comentarii']=$this->comentarii_model->afiseaza_ultimul(array( 'anunt_id' => $anunt_id));
    $this->load->view('comentarii/afiseaza_ultimul.php', $data);
    
  }    
}

?>
