<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('login');
		$this->load->view('layout/footer');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */