<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


class Pengajuan extends REST_Controller{

    public function index_get(){
    	$id = $this->get('id_pengajuan');

    	if ($id == null || $id == "") {
    		$data = $this->db->get('tb_pengajuan')->result();
    	}else{
            $this->db->where('id_pengajuan', $id);
    		$data = $this->db->get('tb_pengajuan')->result();
    	}
    	$this->response($data, 200); // Send an HTTP 201 Created
    }

    

    
}