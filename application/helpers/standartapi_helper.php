<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function apistandart($status, $data=[]){
		$respone = array(
            'status'           => $status,
            'data'			   => $data
        );
        return json_encode($respone);
	}

