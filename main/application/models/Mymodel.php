<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Mymodel extends CI_Model {
	
        function __construct() {
            parent::__construct();
        }	


function search($keyword)
    {
        $this->db->like('id',$keyword);
        $query = $this->db->get('what');
        return $i = $query->result();


// return $i = $this->db->select('*')->from('news')->order_by('id','ASC')->limit($limit, $start)->get()->result();

    }
}   