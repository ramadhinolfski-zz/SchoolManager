<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locked extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('locked');
		$this->load->view('layout/footer');
	}

}

/* End of file Locked.php */
/* Location: ./application/controllers/Locked.php */