<?php
 class client_model extends CI_Model{
 	public function __construct(){
 		$this->load->database();
 	}
 	 public function get_clients($slug= FALSE)
 	 {
 	 	if ($slug ===FALSE){
 	 		$query =$this->db->get('clients');
 	 		return $query->result_array();
 	 		# code...
 	 	}
 	 	$query = $this->db->get_where('clients',array('slug'));
 	 	return $query->row_array();
 	 }
 }