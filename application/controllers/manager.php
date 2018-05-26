 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('level')){
			redirect ('login');
		}else{
			$this->load->view('manager');
		}
	}
}