<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('login');
		$this->load->view('layout/foot');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */