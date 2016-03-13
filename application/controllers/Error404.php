<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

	public function index()
	{
		$this->load->view('404');
	}

}

/* End of file 404.php */
/* Location: ./application/controllers/404.php */