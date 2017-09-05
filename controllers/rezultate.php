<?php

class Rezultate extends CI_Controller {

  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
//    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  }
  
  public function index()
  {

    //if ( ! file_exists('application/views/dm/'.$page.'.php')) {
      // Whoops, we don't have a page for that!
    //  show_404();
    //  }
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

//    $data['title'] = ucfirst($page); // Capitalize the first letter

    if ($this->form_validation->run() == FALSE)
    {
    echo'numerge';
      $this->load->view('templates/header');
      $this->load->view('dm/home.php');
      $this->load->view('templates/footer');    
    }
    else
    {
      $this->load->view('templates/header');
      $this->load->view('dm/rezultate.php');
      $this->load->view('templates/footer');    
    }    
                    
  }

}
      