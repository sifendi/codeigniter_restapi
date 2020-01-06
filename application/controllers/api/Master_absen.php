<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


class Master_absen extends REST_Controller{

    public function index_get(){
    	$id = $this->get('id_absen');

    	if ($id == null || $id == "") {
    		$data = $this->db->get('tb_master_absen')->result();
    	}else{
            $this->db->where('id_absen', $id);
    		$data = $this->db->get('tb_master_absen')->result();
    	}
    	$this->response($data, 200); // Send an HTTP 201 Created
    }

    public function index_post(){
    	echo "Master Absen post";
        // Create a new book
    }
}