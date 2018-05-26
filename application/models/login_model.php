<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function ceklogin($email, $pass)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $pass);
		return $this->db->get('tb_user')->row();
	}

}
