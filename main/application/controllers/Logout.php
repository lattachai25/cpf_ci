<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class logout extends CI_Controller
{

  public function __construct() {
          parent:: __construct();

      }

      public function index()
      {
        session_destroy();
        $this->load->view('login_view');

      }










}
