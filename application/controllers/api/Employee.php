<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


class Employee extends REST_Controller{

    public function index_get(){
    	// $this->response($this->db->get('tb_pegawai')->result());
    	
    	$data = $this->db->get('tb_pegawai')->result();
    	$this->response($data, 201); // Send an HTTP 201 Created
    }

    public function index_post()
    {
    	echo "Employee post";
        // Create a new book
    }
}