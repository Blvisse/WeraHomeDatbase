<?php



 class client_model extends CI_Model
 {
 	public function __construct()
 	{
 		$this->load->database();
 	}
 	 public function get_clients($slug= FALSE)
 	 {
 	 	if ($slug ===FALSE){
 	 		$this->db->order_by('id','DESC');
 	 		$query =$this->db->get('clients');
 	 		return $query->result_array();
 	 		# code...
 	 	}
 	 	$query = $this->db->get_where('clients',array('slug'=>$slug));
 	 	return $query->row_array();
 	 }
 	 public function create_client()
 	 {
 	 	$slug =url_title($this->input->post('name'));
 	 	$data=array(
 	 	'name'=>$this->input->post('name'),'slug'=>$slug,
 	 	'body'=>$this->input->post('body'));
 	 	return $this->db->insert('clients',$data);
 	 }
 }