<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

	public function index(){
	
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
               'title' => 'Brand',
               'heading' => 'My Heading',
               'message' => 'My Message'
          );

		$template['content'] = $this->load->view('brand',$contents,TRUE);
		$this->load->view('template',$template);
	
	}
	
	
	
	
}