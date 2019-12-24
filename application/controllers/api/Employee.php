<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


class Employee extends REST_Controller{

    public function index_get(){
    	$id = $this->get('id_pegawai');

    	if ($id == null || $id == "") {
    		$data = $this->db->get('tb_pegawai')->result();
    	}else{
            $this->db->where('id_pegawai', $id);
    		$data = $this->db->get('tb_pegawai')->result();
    	}
    	$this->response($data, 200); // Send an HTTP 201 Created
    }

    public function index_post(){
    	echo "Employee post";
        // Create a new book
    }
}