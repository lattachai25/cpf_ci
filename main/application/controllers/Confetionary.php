<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confetionary extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('lang') === '' || $this->session->userdata('lang') === false){redirect('th');}
	}
	public function index(){
	
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
               'title' => 'Confetionary',
               'heading' => 'My Heading',
               'message' => 'My Message'
          );

		$template['content'] = $this->load->view('confetionary',$contents,TRUE);
		$this->load->view('template',$template);
	
	}
	
	public function view($id=null){
	
		$contents['cart_session'] = $this->session->userdata('cart_session');
		
		
		  $data = array();
		  $data['title'] = "title";
		  $data['heading'] = "heading";
		  $data['message'] = "message";
		  $data['id'] = $id;


		$template['content'] = $this->load->view('show_confetionary',$data ,TRUE);

		$this->load->view('template',$template);
	
	}
	
	
}