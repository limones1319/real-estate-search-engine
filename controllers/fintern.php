<?php

class Fintern extends CI_Controller {

  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
//    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $this->load->helper(array('form', 'url', 'query_string_helper'));
    $this->load->library('form_validation');
    $this->load->database();
    $this->load->library('pagination');
    $this->load->library('tesseractocr');
//    parse_str($_SERVER['QUERY_STRING'],$_GET);
  }
    
  public function backup_db()
  {
    $this->load->model('backup_db');
    $data['anunturi']= new Backup_db();
    $data['anunturi'] = $this->backup_db->principal();
    $this->load->view('templates/backup_db.php', $data);
  }

  public function lansator()
  {
    $variabile=$this->input->get();
    $this->load->model('lansator');
    $data['anunturi']= new Lansator();
    $data['anunturi'] = $this->lansator->principal();
    $this->load->view('templates/lansator.php', $data);
  }

  public function tarator()
  {
    $variabile=$this->input->get();
    $this->load->model('tarator');
    $data['anunturi']= new Tarator();
    $data['anunturi'] = $this->tarator->principal($variabile);
    $this->load->view('dm/tarator.php', $data);
  }

  public function verificare()
  {
    $variabile=$this->input->get();
    $this->load->model('tarator');
    $data['anunturi']= new Tarator();
    $data['anunturi'] = $this->tarator->verificare($variabile);
    $this->load->view('dm/verificare.php', $data);
  }

  public function repara_locatie()
  {
    $this->load->model('repara_locatie');
    $data['anunturi']= new Repara_locatie();

    $data['anunturi'] = $this->repara_locatie->principal();
    $this->load->view('templates/header');
    $this->load->view('dm/anuntul.php', $data);
    $this->load->view('templates/footer');    
  }
  
  public function repara_contact()
  {

    echo 'gicu';
    $this->load->model('repara_contact');
    $data['anunturi']= new Repara_contact();

    $data['anunturi'] = $this->repara_contact->principal();
    $this->load->view('templates/header');
    $this->load->view('dm/anuntul.php', $data);
    $this->load->view('templates/footer');    
  }
  
  public function repara_tip()
  {

    $this->load->model('repara_tip');
    $data['anunturi']= new Repara_tip();

    $data['anunturi'] = $this->repara_tip->principal();
    $this->load->view('templates/header');
    $this->load->view('dm/repara_tip.php', $data);
    $this->load->view('templates/footer');    
  }
  
}