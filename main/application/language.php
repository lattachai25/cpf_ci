<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Language extends CI_Controller {

    public function __construct() {
        parent:: __construct();
    }

    public function index() {      
 $this->session->sess_destroy();

    }

    public function eng(){

$this->session->unset_userdata('lang');
$this->session->set_userdata('lang', 'en');

header('Location: ' . $_SERVER['HTTP_REFERER']);

    }
    public function thai(){
$this->session->unset_userdata('lang');       
$this->session->set_userdata('lang', 'th');

header('Location: ' . $_SERVER['HTTP_REFERER']);

    }
 
}