<?php
	/**
	 * 
	 */
	class clients extends CI_Controller
	{
		
		public function index()
		{
		
			$data['title']='Client List';
			$data['clients']=$this->client_model->get_clients();
			 // print_r($data['clients']);


			$this->load->view('templates/header');
			$this->load->view('clients/index',$data);
			$this->load->view('Templates/footer');
		}

	 	public function view($slug = NULL){
	 		$data['client']=$this->client_model->get_clients($slug);
			if(empty($data['client'])){
				show_404();

			}
	 		$data['name']=$data['client']['name'];

		$this->load->view('templates/header');
			$this->load->view('clients/view',$data);
	 		$this->load->view('Templates/footer');


		}
	 	public function create()
	 	{
			$data['name']='Add New Client';

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('body','Body','required');

		if($this->form_validation->run()===FALSE){


		$this->load->view('templates/header');
		$this->load->view('clients/create',$data);
		$this->load->view('Templates/footer');
	}
	 	else{
	 		$this->client_model->create_client();
		redirect('clients');
			
		}
		}
	// 	public function delete($id){
	// 		$this->post_model->delete_post($id);
	// 		redirect('posts');

	// 	}
		public function edit($slug){
		$data['client']=$this->client_model->get_posts($slug);
		if(empty($data['client'])){
			show_404();

		}
		$data['name']='Edit Client';
		$this->load->view('templates/header');
		$this->load->view('clients/edit',$data);
		$this->load->view('Templates/footer');




		}

	 }