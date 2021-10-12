<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_category extends CI_Controller {

	public function index(){
	
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
               'title' => 'Sub_category',
               'heading' => 'My Heading',
               'message' => 'My Message'
          );

		$template['content'] = $this->load->view('sub_category',$contents,TRUE);
		$this->load->view('template',$template);
	
	}
	
	
	
	
}