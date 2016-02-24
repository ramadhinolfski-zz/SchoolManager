<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instruktur extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('instruktur', $judul);
	}

}

/* End of file Instruktur.php */
/* Location: ./application/controllers/Instruktur.php */