<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('dashboard');
		$this->load->view('layout/foot');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */