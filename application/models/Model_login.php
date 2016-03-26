<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function getlogin($u,$p)
	{
		$pwd = md5($p);
		$this->db->where('username', $u);
		$this->db->where('password', $pwd);
		$query = $this->db->get('tb_login');

		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sess = array(	'username'	=> $row->username);

				$this->session->set_userdata($sess);
				redirect('../dashboard');
			}
		} else {
			$this->session->set_flashdata('info','username atau password salah');
			redirect('../login');
		}
	}

}

/* End of file Model_login.php */
/* Location: ./application/models/Model_login.php */