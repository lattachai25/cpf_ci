<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class intro extends CI_Controller {

	public function index(){
	
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
               'title' => 'Dnews intro',
               'heading' => 'My Heading',
               'message' => 'My Message'
          );

		$template['content'] = $this->load->view('intro',$contents,TRUE);
		$this->load->view('template',$template);
	
	}
	
}