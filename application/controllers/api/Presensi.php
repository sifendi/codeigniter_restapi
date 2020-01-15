<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Presensi extends REST_Controller{
    public function index_get(){
    	$id = $this->get('id_presensi');
    	if ($id == null || $id == "") {
    		$data = $this->db->get('tb_presensi')->result();
    		$bantu = apistandart('Success',$data);
    		$this->output
		        ->set_content_type('application/json')
		        ->set_output($bantu);

    	}else if(is_numeric($id)) {
            $this->db->where('id_presensi', $id);
    		$data = $this->db->get('tb_presensi')->result();
    		$bantu = apistandart('Success Call Data By ID',$data);
    		$this->output
		        ->set_content_type('application/json')
		        ->set_output($bantu);
    	}else{
    		$data = $this->response(array('status' => 'fail, param is not correct'), 502);
    		$bantu = apistandart('Failed',$data);
    		$this->output
		        ->set_content_type('application/json')
		        ->set_output($bantu);
    	}
    }


    public function index_post(){
    	$data = array(
                    'id_presensi'        => $this->post('id_presensi'),
                    'id_pegawai'      => $this->post('id_pegawai'),
                    'tanggal'            => $this->post('tanggal'),
                    'ket_presensi'         => $this->post('ket_presensi'),
                    'lat_'            => $this->post('lat_'),
                    'long_'        => $this->post('long_'),
                    'distance'          => $this->post('distance'),
                    'type_absen'          => $this->post('type_absen'),
                    'foto'          => $this->post('foto'));

        $insert = $this->db->insert('tb_presensi', $data);
        if ($insert) {
        	$bantu = apistandart('Success','');
        	$this->output
        	->set_content_type('application/json')
        	->set_output($bantu);
        } else {
            $x = $this->response(array('status' => 'fail', 502));
	  		$bantu = apistandart('Failed',$x);
	    		$this->output
			        ->set_content_type('application/json')
			        ->set_output($bantu);
		}
    }
    

}