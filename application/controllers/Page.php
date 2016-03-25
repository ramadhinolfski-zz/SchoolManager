<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('page');
		$this->load->view('layout/foot');
	}

	function LihatInstruktur()
	{
		$this->load->model('KoneksiInstruktur');
		$data['query']=$this->KoneksiInstruktur->LihatInstruktur;
	}

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */