<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
    parent::__construct();

		/*
		$this->load->model('Productos');
    $this->load->library('Apicall');
    $this->load->library('Emailutil');
		*/
  }



	public function index()
	{
		$this->load->view('welcome_message');
	}



	public function login(){
		$this->load->view('admin/login');
	}

	public function loged(){
		$this->load->view('admin/main');
	}

}
