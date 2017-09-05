<?php

class DM extends CI_Controller 
{

  var $start;
  var $stop;
  var $mysql_jurnal;
  var $mysql;
  var $sphinx;
  var $cale='assets/images/grafice/';
  
  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
    //$this->output->enable_profiler(TRUE);
        $this->start=time();
//    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $this->load->helper(array('form', 'url', 'query_string_helper'));
    $this->load->library('form_validation');
    $this->load->library('pagination');
    $this->load->library('session');
    parse_str($_SERVER['QUERY_STRING'],$_GET);

    $this->mysql_jurnal=$this->load->database('mysql',TRUE);
    $CI =& get_instance();
    $CI->mysql_jurnal =& $this->mysql_jurnal;  
    
    include("application/libraries/pchart/class/pdata.php");
    include("application/libraries/pchart/class/pdraw.php");
    include("application/libraries/pchart/class/pimage.php");

    $variabile=$this->input->get();
    if (isset($variabile['per_page'])===FALSE) 
    { 
      $pagina_curenta=1; 
      $config['base_url'] = 'index.php'.uri_query_string('','',TRUE);
    } 
    else 
    { 
      $pagina_curenta=$variabile['per_page'];
      $config['base_url'] = 'index.php'.uri_query_string('','per_page',TRUE);
    }
  }
    
  public function index()
  {

    //if ( ! file_exists('application/views/dm/'.$page.'.php')) {
      // Whoops, we don't have a page for that!
    //  show_404();
    //  }

//    $data['title'] = ucfirst($page); // Capitalize the first letter
      $this->load->model('rezultate');

      $data['cauta']=new Rezultate();
      $data['cauta']=$this->rezultate->total_anunturi();
      
      $this->load->view('templates/header_prima_pagina');
      $this->load->view('dm/home.php', $data);
      $this->load->view('templates/footer');    
  }

  public function cum_caut()
  {

      $data['cauta']='';
    
      $this->load->view('templates/header_ajutor');
      $this->load->view('templates/cum_caut', $data);
      $this->load->view('templates/footer');    
  }

  public function genereaza_grafic()
  {
    $variabile=$this->input->get();

    $this->load->model('rezultate');
    $data['rezultate']=new Rezultate();
    
    $analiza=$this->rezultate->analizeaza_cautarea($variabile['cauta_text']);
    $data['imagine_zi']=$this->rezultate->genereaza_imaginea($variabile['cauta_text'], $analiza, 'DAY');
    $data['imagine_saptamana']=$this->rezultate->genereaza_imaginea($variabile['cauta_text'], $analiza, 'WEEK');
    $data['imagine_luna']=$this->rezultate->genereaza_imaginea($variabile['cauta_text'], $analiza, 'MONTH');
    
    $this->load->view('dm/genereaza_grafic', $data);
  }
  
  public function cauta()
  {
    $this->load->model('rezultate');
    $data['rezultate']=new Rezultate();
    
    $variabile=$this->input->get();

      if (isset($variabile['per_page'])===FALSE) 
      { 
        $pagina_curenta=1; 
        $config['base_url'] = 'index.php'.uri_query_string('','',TRUE);
      } 
      else 
      { 
        $pagina_curenta=$variabile['per_page'];
        $config['base_url'] = 'index.php'.uri_query_string('','per_page',TRUE);
        if($pagina_curenta>99) $pagina_curenta=99;
      }
      $cauta_text=str_replace('-', ' ', $variabile['cauta_text']);

    $this->load->model('cautari_similare');
    $data['cautari_similare']=new Cautari_Similare();

    $analiza=$this->rezultate->analizeaza_cautarea($cauta_text);
    $data['cautari_similare']=$this->cautari_similare->descarca_cautari($analiza);

    $config=array_merge($config, $this->paginare($cauta_text));
    $data['cauta']=$cauta_text;

    $data['rezultate']=$this->rezultate->cauta($pagina_curenta, $cauta_text, $analiza);

    $this->pagination->initialize($config); 
    $data['paginare']=$this->pagination->create_links();

    $nume_fisier=str_replace('>','_',str_replace('<','_',str_replace(' ', '-',$cauta_text)));
    $data['imagine_zi']=$this->cale.$nume_fisier.'-zi.png';
    $data['imagine_saptamana']=$this->cale.$nume_fisier.'-luna.png';
    $data['imagine_luna']=$this->cale.$nume_fisier.'-an.png';

    $this->load->view('templates/header', $data);
    $this->load->view('dm/cautare.php', $data);
    if (count($data['rezultate'])>0)
    {
      $this->load->view('dm/rezultate.php',$data);
      //$this->load->view('dm/rezultate_fara_imagini.php',$data);
    }
    else
    {
      $this->load->view('dm/zero_rezultate.php');
    }
    $this->load->view('templates/footer');    

    $this->stop=time();
    if (isset($variabile['cauta_text'])===TRUE)
    {
      $cauta_text=str_replace('-', ' ', $variabile['cauta_text']);
      $this->stocheaza_jurnal($cauta_text, $this->stop-$this->start, $this->rezultate->total_randuri($cauta_text));
    }

  }
  
  public function index_imobiliar()
  {
    $this->load->model('rezultate');
    $variabile=$this->input->get();
    $data['rezultate']=new Rezultate();
    $cauta_text=$variabile['cauta_text'];

    $analiza=$this->rezultate->analizeaza_cautarea($variabile['cauta_text']);
    $data['imagine_zi']=$this->rezultate->genereaza_imaginea($variabile['cauta_text'], $analiza, 'DAY');
    $data['imagine_saptamana']=$this->rezultate->genereaza_imaginea($variabile['cauta_text'], $analiza, 'WEEK');
    $data['imagine_decada']=$this->rezultate->genereaza_imaginea($variabile['cauta_text'], $analiza, 'YEAR');

    $data['cauta']=$cauta_text;
    $this->load->view('templates/header_indice_imobiliar', $data);
    $this->load->view('dm/cautare.php', $data);
    $this->load->view('dm/index_imobiliar.php',$data);
    $this->load->view('templates/footer');    
  
  }
  
  public function cauta_numar()
  {
    $variabile=$this->input->get();  

    $this->load->model('cautari_similare');
    $data['cautari_similare']=new Cautari_Similare();
    $data['cautari_similare']=$this->cautari_similare->descarca_cautari($variabile['contact']);

    $this->load->model('rezultate');
    $data['rezultate']=new Rezultate();
    $analiza=$this->rezultate->analizeaza_cautarea($variabile['contact']);

    if(ctype_digit($variabile['contact'])===FALSE) redirect('','location',301);
    if($variabile['contact']=='0') redirect('','location',301);
    if($this->rezultate->verifica_contact($variabile['contact'])<1) redirect('','location',301);
    $data['rezultate']=$this->rezultate->cauta((array_key_exists('pagina', $variabile) ? $variabile['pagina'] : 1), $variabile['contact'], $analiza);
    $data['cauta']=$variabile['contact'];

    $config=$this->paginare($variabile['contact']);
//    $config['base_url'] = 'http://cauta-imobiliare.info/index.php/dm/cauta_numar/contact/'.str_replace(' ', '-', $variabile['contact']).'/pagina/';
    $config['base_url'] = 'index.php'.uri_query_string('','per_page',TRUE);
    $this->pagination->initialize($config); 
    $data['paginare']=$this->pagination->create_links();
    
    $this->load->view('templates/header', $data);
    $this->load->view('dm/cautare.php', $data);
    $this->load->view('dm/rezultate_numar.php',$data);
    $this->load->view('templates/footer');    

    $this->stop=time();
    if (isset($variabile['contact'])===TRUE)
    {
      $cauta_text=str_replace('-', ' ', $variabile['contact']);
      $this->stocheaza_jurnal($cauta_text, $this->stop-$this->start);
    }
  
  }
  
  public function cauta_id()
  {
//    $variabile=$this->input->get();
//    $variabile=$variabile['anunt_id'];
    $variabile=$this->input->get();
    unset($variabile['c'], $variabile['m']);

    $this->load->model('cautari_similare');
    $data['cautari_similare']=new Cautari_Similare();
    $data['cautari_similare']=$this->cautari_similare->descarca_cautari($variabile['anunt_id']);

    $this->load->model('rezultate');
    $data['r']=new Rezultate();
    $this->load->model('comentarii_model');

    if ($this->rezultate->verifica_anunt_id($variabile['anunt_id'])<1) redirect('','location',301);
    
    $data['comentarii']=new Comentarii_Model();
    $data['comentarii']=$this->comentarii_model->afiseaza_comentarii($variabile);
    $data['r']=$this->rezultate->cauta_id($variabile);
    $data['similare']=$this->rezultate->similare;
    $data['anunt']=$this->rezultate->anunt;
    if ($data['r']!==FALSE) 
    {
      $data['imagine_zi']=$this->rezultate->genereaza_imagine_anunt_id($variabile, 'DAY');
    }
    $data['cauta']='';
    $data['anunt_id']=$variabile['anunt_id'];

    $this->load->view('templates/header', $data);
    $this->load->view('dm/cautare.php', $data);
    $this->load->view('dm/similar.php',$data);
    $this->load->view('comentarii/formular_comentarii.php',$data);
//    $this->load->view('comentarii/afiseaza_comentarii.php',$data);
    $this->load->view('templates/footer_contact');    

    $this->stop=time();
    if (isset($variabile['anunt_id'])===TRUE)
    {
      $cauta_text=str_replace('-', ' ', $variabile['anunt_id']);
      $this->stocheaza_jurnal($cauta_text, $this->stop-$this->start);
    }
  }
  
  public function ircd()
  {
    $redirect=$this->input->get();
    $this->load->model('ircd');
    $data['ircd']=new Ircd();
    $data['ircd']=$this->ircd->redirect($redirect);
    $this->load->view('dm/ircd.php', $data);
  }
  
  function paginare($cauta)
  {
    $obiect=new Rezultate();
    $config['total_rows'] = $obiect->total_randuri($cauta);
    $config['per_page'] = 10; 
    $config['use_page_numbers'] = TRUE;
    $config['uri_segment'] = 6;
    $config['num_tag_open'] = '<div class="numarPagina">';
    $config['num_tag_close'] = '</div>';
    $config['full_tag_open'] = '<div class="paginare">';    
    $config['full_tag_close'] = '</div>';
    $config['last_link'] = 'Ultima';
    $config['last_tag_open'] = '<div class="ultima">';
    $config['last_tag_close'] = '</div>';    
    $config['first_link'] = 'Prima';
    $config['first_tag_open'] = '<div class="prima">';
    $config['first_tag_close'] = '</div>';
    $config['next_link'] = FALSE;
    $config['prev_link'] = FALSE;
    return $config;
  }

  function stocheaza_jurnal($cauta_text=NULL, $durata, $rezultate=1)
  {
    if ($rezultate===NULL) $rezultate=0;
    $arr=array('cautare' => $cauta_text, 'adresa' => $this->session->userdata('ip_address'), 'url' => uri_query_string(), 'durata' => $durata, 'rezultate' => $rezultate);
    $this->mysql_jurnal->insert('jurnal', $arr);
  }
  
}
      
?>
