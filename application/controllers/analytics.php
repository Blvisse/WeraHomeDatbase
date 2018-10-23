<?php
	/**
	 * 
	 */
	class analytics extends CI_Controller
	{
		
		public function index()
		{
		
			$data['title']='Analytics Form';
			$data['testing']=$this->analytics_model->get_analytics();

			 // print_r($data['clients']);


			$this->load->view('templates/header');
			$this->load->view('analytics/index',$data);
			$this->load->view('Templates/footer');
		}

	 	public function view($slug = NULL){
	 		$data['id']=$this->analytics_model->get_analytics($slug);
			if(empty($data['id'])){
				show_404();

			}
	 		$data['id']=$data['id']['id'];

		$this->load->view('templates/header');
			$this->load->view('analytics/view',$data);
	 		$this->load->view('Templates/footer');


		}
	 	public function create()
	 	{
			$data['title']='Add New Analytics';

		$this->form_validation->set_rules('id','ProductID','required');
		$this->form_validation->set_rules('profit','Profit','required');
		$this->form_validation->set_rules('id','ProductID','required');
		$this->form_validation->set_rules('year','Year','required');

		if($this->form_validation->run()===FALSE){


		$this->load->view('templates/header');
		$this->load->view('analytics/create',$data);
		$this->load->view('Templates/footer');
	}
	 	else{
	 		$this->analytics_model->create_analytics();
		redirect('analytics');
			
		}
		}
	// 	public function delete($id){
	// 		$this->post_model->delete_post($id);
	// 		redirect('posts');

	// 	}
		// public function edit($slug){
		// $data['analytics']=$this->client_model->get_posts($slug);
		// if(empty($data[])){
		// 	show_404();

		// }
		// $data['name']='Edit Client';
		// $this->load->view('templates/header');
		// $this->load->view('clients/edit',$data);
		// $this->load->view('Templates/footer');




		}

	 