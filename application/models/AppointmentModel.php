<?php

class AppointmentModel extends CI_Model{
    public function add_client($data){
        //get the data from controller and insert into the table 'appointments'
        return $this->db->insert('appointments', $data);
    }
}
