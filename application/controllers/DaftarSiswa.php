<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarSiswa extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('dataSiswa/daftarSiswa');
		$this->load->view('layout/footer');
	}

}

/* End of file DaftarSiswa.php */
/* Location: ./application/controllers/DaftarSiswa.php */