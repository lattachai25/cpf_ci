<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('lang') === '' || $this->session->userdata('lang') === false){redirect('th');}
	}
	public function index(){


echo "HELLO !";

	
	// 	$contents['cart_session'] = $this->session->userdata('cart_session');
	// 	$template = array(
    //            'title' => 'Show',
    //            'heading' => 'My Heading',
    //            'message' => 'My Message'
    //       );

	// 	$template['content'] = $this->load->view('show_meat',$contents,TRUE);
	// 	$this->load->view('template',$template);
	
	// }
	
	// public function view($id=null){


	// 	$contents['cart_session'] = $this->session->userdata('cart_session');
	// 	$template = array(
    //            'title' => 'Meat',
    //            'heading' => 'My Heading',
    //            'message' => 'My Message'
    //       );

	// 	$template['content'] = $this->load->view('show_meat',$contents,$id,TRUE);
	// 	$this->load->view('template',$template);


	// 	}	




	
	
}