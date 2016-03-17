<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KoneksiInstruktur extends CI_Controller {

	public function index()
	{
		function KoneksiInstruktur(){
			parent::Model();
		}

		function LihatInstruktur() {
			$this->load->database();
			$query = $this->db->get('tb_instruktur');
			return $query->result();
		}
	}

}

/* End of file KoneksiInstruktur.php */
/* Location: ./application/models/KoneksiInstruktur.php */