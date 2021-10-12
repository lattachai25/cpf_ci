<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}	


	function product($limit, $start){

$today = date("Y-m-d");
$this->db->select("*");
$this->db->from("news");
$this->db->where('day <=', $today);
$this->db->order_by("news.day", "DESC");
$this->db->limit($limit, $start); 
$query = $this->db->get();
return $i = $query->result();





// return $i = $this->db->select('*')->from('news')->order_by('id','ASC')->limit($limit, $start)->get()->result();
	}

}