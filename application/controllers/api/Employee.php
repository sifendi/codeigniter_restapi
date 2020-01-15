<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Employee extends REST_Controller{
    public function index_get(){
    	$id = $this->get('id_pegawai');
    	if ($id == null || $id == "") {
    		$data = $this->db->get('tb_pegawai')->result();
    		$bantu = apistandart('Success','false',$data);
    		$this->output
		        ->set_content_type('application/json')
		        ->set_output($bantu);
    	}else if(is_numeric($id)) {
            $this->db->where('id_pegawai', $id);
    		$data = $this->db->get('tb_pegawai')->result();
    		$bantu = apistandart('Success Call Data By ID','false',$data);
    		$this->output
		        ->set_content_type('application/json')
		        ->set_output($bantu);
    	}else{
    		$data = $this->response(array('status' => 'fail, param is not correct'), 502);
    		$bantu = apistandart('Failed','true',$data);
    		$this->output
		        ->set_content_type('application/json')
		        ->set_output($bantu);
    	}
    }


    public function index_post(){
    	$data = array(
                    'id_pegawai'        => $this->post('id_pegawai'),
                    'nama_pegawai'      => $this->post('nama_pegawai'),
                    'alamat'            => $this->post('alamat'),
                    'handphone'         => $this->post('handphone'),
                    'status'            => $this->post('status'),
                    'start_date'        => $this->post('start_date'),
                    'end_date'          => $this->post('end_date'));

        $insert = $this->db->insert('tb_pegawai', $data);
        if ($insert) {
        	$bantu = apistandart('Success','false','');
        	$this->output
        	->set_content_type('application/json')
        	->set_output($bantu);
        } else {
            $x = $this->response(array('status' => 'fail', 502));
	  		$bantu = apistandart('Failed','true',$x);
	    		$this->output
			        ->set_content_type('application/json')
			        ->set_output($bantu);
		}
    }
    

}