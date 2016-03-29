<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('404');
		$this->load->view('layout/foot');
	}

}

/* End of file Error404.php */
/* Location: ./application/controllers/Error404.php */