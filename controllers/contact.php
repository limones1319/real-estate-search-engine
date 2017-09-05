<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/*

	Usage:
	Edit the protected variables at start of class.
	If headerView/footerView is null it won't 
	load those views. Assuming you keep your header
	and footer in /views/template/ it will work
	with the defaults.

	There is no ip logging, no captcha. 

	Just a simple form :)

	Just go to site_url("contact") and it should
	work out of the box. 



 */
class Contact extends CI_Controller {


	// settings
	protected 	$sendEmailTo 	= 	'contact@cauta-imobiliare.info';
	protected	$subjectLine 	= 	""; // actually set on line 39.
	
	// views
	protected 	$formView		= 	'contact/contact';
	protected	$successView	= 	'contact/contact_success';
	protected 	$headerView 	= 	'templates/header_contact'; //null to disable
	protected 	$footerView 	= 	'templates/footer_contact'; //null to disable

	// other
	public 		$data 			= 	array(); // used for the views


	public function index() {

		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->subjectLine = "Formular de contact. Raspuns de la " . $_SERVER['HTTP_HOST'];
		$this->form_validation->set_rules('name', 'Numele tau', 'trim|este necesar');
		$this->form_validation->set_rules('email', 'Adresa ta de email', 'trim|este necesar|valid_email');
		$this->form_validation->set_rules('message', 'Mesaj', 'trim|este necesar|xss_clean');

		if($this->form_validation->run() == FALSE) {
			// show the form
			
			if ($this->headerView) { $this->load->view($this->headerView,$this->data); }
			$this->load->view($this->formView,$this->data);
			if ($this->footerView) { $this->load->view($this->footerView,$this->data); }

		} else {
			// success! email it, assume it sent, then show contact success view.
			
			$this->load->library('email');
			$this->email->from($this->input->post('email'), $this->input->post('name'));
			$this->email->to($this->sendEmailTo);
			$this->email->subject($this->subjectLine);
			$this->email->message($this->input->post('message'));
			$this->email->send();

			if ($this->headerView) { $this->load->view($this->headerView,$this->data); }
			$this->load->view($this->successView,$this->data);
			$this->load->view($this->formView,$this->data);
			if ($this->footerView) { $this->load->view($this->footerView,$this->data); }

		}
	}
}
