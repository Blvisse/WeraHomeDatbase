<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends MY_Controller {
 
    public function index() {
        $this->load->view('header');
        $this->load->view('welcome_message');
        $this->load->view('footer');
    }
 
}