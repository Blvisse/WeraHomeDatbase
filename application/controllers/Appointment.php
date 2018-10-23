<?php
 
class Appointment extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        
        //load the required helpers and libraries
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        
        //load our Appointment model here
        $this->load->model('AppointmentModel', 'appointment');
    }
 
    
    public function index() {
        //check if the user is already logged in 
        //if yes redirect to the welcome page
        if ($this->session->userdata('logged_in')) {
            redirect(base_url() . 'welcome');
        }
        //load the appointment page views
        $this->load->view('header');
        $this->load->view('appointment_page');
        $this->load->view('footer');
    }
 
    //appointment validation and logic
    public function doAppointment() {
        //set the form validation here
        $this->form_validation->set_rules('name', 'Client name', 'required|min_length[3]');
        $this->form_validation->set_message('is_unique', 'Appointment time collide.');
        $this->form_validation->set_rules('time', 'Appointment time', 'required|valid_time|is_unique[Appointment time]');
 
        //if the above validation fails, redirect to register page
        //with vaildation_errors();
        if ($this->form_validation->run() == FALSE) {
            //set the validation errors in flashdata (one time session)
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'appointment');
        } else {
            //if not get the input values
            $name = $this->input->post('name');
            $email = $this->input->post('time');
 
            $data = [
                'name' => $name, 'date_time' => date('Y-m-d H:i:s')
            ];
 
            //pass the input values to the appointment model
            $insert_data = $this->appointment->add_client($data);
 
            //if data inserted then set the success message and redirect to login page
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Successfully added!');
                redirect(base_url() . 'appointment');
            }
        }
    }
}