<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			if($this->session->userdata('lang') === '' || $this->session->userdata('lang') === false){redirect('th');}
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
               'title' => 'Home',
               'heading' => 'My Heading',
               'message' => 'My Message'
          );

		$template['content']      = $this->load->view('home',$contents,TRUE);
		$this->load->view('template',$template);
	
	}







	
	
}