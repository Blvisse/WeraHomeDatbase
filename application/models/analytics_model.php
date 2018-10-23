<?php



 class analytics_model extends CI_Model
 {
 	public function __construct()
 	{
 		$this->load->database();
 	}
 	 public function get_analytics($slug= FALSE)
 	 {
 	 	if ($slug ===FALSE){
 	 		$this->db->order_by('id','DESC');
 	 		$query =$this->db->get('testing');
 	 		return $query->result_array();
 	 		# code...
 	 	}
 	 	$query = $this->db->get_where('testing',array('profit'=>$profit));
 	 	return $query->row_array();
 	 }
 	 public function create_analytics()
 	 {

 	 	$slug=url_title($this->input->post('id'));
 	 	$data=array(
 	 	'id'=>$this->input->post('id'),   
 	 	'year'=>$this->input->post('year'),
 	 	'sale'=>$this->input->post('sale'),
 	 	'profit'=>$this->input->post('profit'));
 	 	return $this->db->insert('testing',$data);
 	 }
 }