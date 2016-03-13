<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahSiswa extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('dataSiswa/tambahSiswa');
		$this->load->view('layout/footer');
	}

}

/* End of file TambahSiswa.php */
/* Location: ./application/controllers/TambahSiswa.php */