<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


class Kontak extends REST_Controller{

    public function index_get(){
    	echo "work";
        // Display all books
    }

    public function index_post()
    {
    	echo "jalan";
        // Create a new book
    }
}