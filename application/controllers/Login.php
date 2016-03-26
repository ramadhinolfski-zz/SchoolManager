<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('login');
		$this->load->view('layout/foot');
	}
	
	public function getlogin()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$this->load->model('Model_login');
		$this->Model_login->getlogin($u,$p);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */