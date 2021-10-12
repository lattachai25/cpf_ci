<?php
class Th_lang extends CI_controller{
	public function __construct()
		{
			parent::__construct();
		}
public function index(){
	$this->session->unset_userdata('lang');
	$this->session->set_userdata('lang', 'th');
  redirect('Home');


}

}