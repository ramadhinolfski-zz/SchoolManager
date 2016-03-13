<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('page');
		$this->load->view('layout/footer');
	}

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */