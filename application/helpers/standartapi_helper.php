<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function apistandart($status, $error, $data=[]){
		$respone = array(
            'status'           => $status,
            'error'			   => $error,
            'data'			   => $data
        );
        return json_encode($respone);
	}

