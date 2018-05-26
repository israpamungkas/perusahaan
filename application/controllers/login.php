<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('login');
	}

	function proseslogin()
	{
		$email_user = $this->input->post('email',true);
		$pass_user = $this->input->post('pass',true);

		$cek = $this->login_model->ceklogin($email_user, $pass_user);
		$tes = count($cek);

		if($tes > 0)
		{
			$data_login = $this->login_model->ceklogin($email_user, $pass_user);
			$level = $data_login->level;
			$id_user = $data_login->id_user;
			$data = array('level' => $level, 'id_user' => $id_user);
			$this->session->set_userdata($data);
			if($level == '1'){
				redirect('admin');
			}elseif($level == '2'){
				redirect('general');
			}elseif($level == '3'){
				redirect('manager');
			}
			else {redirect('karyawan');
				# code...
			}
		}else{
			echo 'gagal login';
		}
	}

	function logout (){
		$this->session->sess_destroy();
		redirect ('login');
	}
}