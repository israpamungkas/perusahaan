<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('level')){
			redirect ('login');
		}
			$a['jenis']	= $this->model_admin->tampil_jenis()->num_rows(); //untuk ambil data dari file model_admin.php dengan function tampil_jenis
			$a['manage_user']	= $this->model_admin->tampil_user()->num_rows();
			$a['surat_keluar']	= $this->model_admin->tampil_surat_keluar()->num_rows();
			$a['input_nilai']	= $this->model_admin->tampil_nilai()->num_rows();
			$a['himpunan']	= $this->model_admin->tampil_himpunan()->num_rows();
			$a['kriteria']	= $this->model_admin->tampil_kriteria()->num_rows();
			$a['kriteria_khusus']	= $this->model_admin->tampil_kriteria_khusus()->num_rows();
			$a['page']	= "home";
			$this->load->view('admin/index', $a);
		}

	public function get_data_status(){
		$data = $this->model_admin->get_jenis_id_rows()->result_object();

		$response->cols[] = array(
			"id" 		=>	"",
			"label"		=>	"Jenis",
			"pattern"	=>	"",
			"type"		=>	"string"
		);

		$response->cols[] = array(
			"id" 		=>	"",
			"label"		=>	"Total",
			"pattern"	=>	"",
			"type"		=>	"number"
		);

		foreach ($data as $item) {
			$response->rows[]["c"] = array(
				array( 
					"v"	=> "$item->jenis_surat",
					"f"	=> null
				),
				array(
					"v"	=> (int)$item->total,
					"f"	=>	null
				)
			);
		}
		echo json_encode($response);
	}

	public function get_score_category(){
		$data = $this->model_admin->get_score_category()->result_object();

		$response->cols[] = array(
			"id" 		=>	"",
			"label"		=>	"Jenis",
			"pattern"	=>	"",
			"type"		=>	"string"
		);

		$response->cols[] = array(
			"id" 		=>	"",
			"label"		=>	"Total",
			"pattern"	=>	"",
			"type"		=>	"number"
		);

		foreach ($data as $item) {
			$response->rows[]["c"] = array(
				array( 
					"v"	=> "$item->keterangan",
					"f"	=> null
				),
				array(
					"v"	=> (int)$item->total,
					"f"	=>	null
				)
			);
		}
		echo json_encode($response);
	}
	
	function kriteria(){
		$a['data']	= $this->model_admin->tampil_kriteria()->result_object();
		$a['page']	= "kriteria";
		
		$this->load->view('admin/index', $a);
	}

	function kriteria_khusus(){
		$a['data']	= $this->model_admin->tampil_kriteria_khusus()->result_object();
		$a['page']	= "kriteria_khusus";
		
		$this->load->view('admin/index', $a);
	}

	/* Fungsi Himpunan */
	function himpunan(){
		$a['data']	= $this->model_admin->tampil_himpunan()->result_object();
		$a['page']	= "himpunan";
		
		$this->load->view('admin/index', $a);
	}

	/* Fungsi Jenis Surat */
	function jenis_surat(){
		$a['data']	= $this->model_admin->tampil_jenis()->result_object();
		$a['page']	= "jenis_surat";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_jenis(){
		$a['page']	= "tambah_jenis_surat";
		
		$this->load->view('admin/index', $a);
	}

	function insert_jenis(){
		
		$jenis = $this->input->post('jenis');
		$object = array(
				'jenis_surat' => $jenis
			);
		$this->db->insert('tb_jenis_surat', $object);

		redirect('admin/jenis_surat','refresh');
	}

	function edit_jenis($id){
		$a['editdata']	= $this->db->get_where('tb_jenis_surat',array('jenis_id'=>$id))->result_object();		
		$a['page']	= "edit_jenis_surat";
		
		$this->load->view('admin/index', $a);
	}

	function update_jenis(){
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');
		$object = array(
				'jenis_surat' => $jenis
			);
		$this->db->where('jenis_id', $id);
		$this->db->update('tb_jenis_surat', $object); 

		redirect('admin/jenis_surat','refresh');
	}

	function hapus_jenis($id){
		
		$this->model_admin->hapus_jenis($id);
		redirect('admin/jenis_surat','refresh');
	}

	/* Fungsi Manage Nilai */
	function input_nilai(){
		$a['data']	= $this->model_admin->tampil_nilai()->result_object();
		$a['page']	= "input_nilai";
		
		$this->output->enable_profiler(true);
		$this->load->view('admin/index', $a);
	}

	function tambah_nilai(){
		$a['page']	= "tambah_nilai";
		$a['karyawan'] = $this->model_admin->get_options();
		
		$this->load->view('admin/index', $a);
	}

	function insert_nilai(){
		
		$idkaryawan = $this->input->post('idkaryawan');
		$jenis1 = $this->input->post('jenis1');
		$jenis2 = $this->input->post('jenis2');
		$jenis3 = $this->input->post('jenis3');
		$jenis4 = $this->input->post('jenis4');
		$jenis5 = $this->input->post('jenis5');
		$jenis6 = $this->input->post('jenis6');
		$jenis7 = $this->input->post('jenis7');
		$jenis8 = $this->input->post('jenis8');
		$jenis9 = $this->input->post('jenis9');
		$jenis10 = $this->input->post('jenis10');
		$jenis11 = $this->input->post('jenis11');
		$jenis12 = $this->input->post('jenis12');
		$jenis13 = $this->input->post('jenis13');
		$jenis14 = $this->input->post('jenis14');
		$jenis15 = $this->input->post('jenis15');
		$jenis16 = $this->input->post('jenis16');
		$jml_id = ($jenis1)*0.151+($jenis2)*0.031+($jenis3)*0.031+($jenis4)*0.151+($jenis5)*0.151+($jenis6)*0.03+($jenis7)*0.03+($jenis8)*0.117+($jenis9)*0.051+($jenis10)*0.018+($jenis11)*0.03+($jenis12)*0.03+($jenis13)*0.092+($jenis14)*0.018+($jenis15)*0.018+($jenis16)*0.05;
		$jenis = 1;
		$object = array(
				'id_karyawan' => $idkaryawan,
				'jenis_id1' => $jenis1,
				'jenis_id2' => $jenis2,
				'jenis_id3' => $jenis3,
				'jenis_id4' => $jenis4,
				'jenis_id5' => $jenis5,
				'jenis_id6' => $jenis6,
				'jenis_id7' => $jenis7,
				'jenis_id8' => $jenis8,
				'jenis_id9' => $jenis9,
				'jenis_id10' => $jenis10,
				'jenis_id11' => $jenis11,
				'jenis_id12' => $jenis12,
				'jenis_id13' => $jenis13,
				'jenis_id14' => $jenis14,
				'jenis_id15' => $jenis15,
				'jenis_id16' => $jenis16,
				'jml_id' => $jml_id,
				'jenis_id' => $jenis,
			);
		$this->db->insert('tb_penilaian', $object);

		redirect('admin/input_nilai	','refresh');
	}


	function edit_nilai($id){
		$a['editdata']	= $this->db->select('*')->from('tb_penilaian tp')->join('tb_karyawan tk', 'tp.id_karyawan=tk.id_karyawan')->where('tp.id_karyawan', $id)->get()->result();		
		$a['page']	= "edit_nilai";
		
		$this->load->view('admin/index', $a);
	}

	function update_nilai(){
		$id = $this->input->post('id');
		$jenis1 = $this->input->post('jenis1');
		$jenis2 = $this->input->post('jenis2');
		$jenis3 = $this->input->post('jenis3');
		$jenis4 = $this->input->post('jenis4');
		$jenis5 = $this->input->post('jenis5');
		$jenis6 = $this->input->post('jenis6');
		$jenis7 = $this->input->post('jenis7');
		$jenis8 = $this->input->post('jenis8');
		$jenis9 = $this->input->post('jenis9');
		$jenis10 = $this->input->post('jenis10');
		$jenis11 = $this->input->post('jenis11');
		$jenis12 = $this->input->post('jenis12');
		$jenis13 = $this->input->post('jenis13');
		$jenis14 = $this->input->post('jenis14');
		$jenis15 = $this->input->post('jenis15');
		$jenis16 = $this->input->post('jenis16');
		$jml_id = ($jenis1)*0.151+($jenis2)*0.030+($jenis3)*0.030+($jenis4)*0.151+($jenis5)*0.151+($jenis6)*0.029+($jenis7)*0.029+($jenis8)*0.117+($jenis9)*0.051+($jenis10)*0.018+($jenis11)*0.03+($jenis12)*0.03+($jenis13)*0.092+($jenis14)*0.018+($jenis15)*0.018+($jenis16)*0.05;
		$jenis = $this->input->post('jenis');
		$object = array(
				'jenis_id1' => $jenis1,
				'jenis_id2' => $jenis2,
				'jenis_id3' => $jenis3,
				'jenis_id4' => $jenis4,
				'jenis_id5' => $jenis5,
				'jenis_id6' => $jenis6,
				'jenis_id7' => $jenis7,
				'jenis_id8' => $jenis8,
				'jenis_id9' => $jenis9,
				'jenis_id10' => $jenis10,
				'jenis_id11' => $jenis11,
				'jenis_id12' => $jenis12,
				'jenis_id13' => $jenis13,
				'jenis_id14' => $jenis14,
				'jenis_id15' => $jenis15,
				'jenis_id16' => $jenis16,
				'jml_id' => $jml_id,
				'jenis_id' => $jenis,
			);
		$this->db->where('id_karyawan', $id);
		$this->db->update('tb_penilaian', $object); 

		redirect('admin/input_nilai','refresh');
	}


	function hapus_nilai($id){
		
		$this->model_admin->hapus_nilai($id);
		redirect('admin/input_nilai','refresh');
	}

	/* Fungsi Surat Keluar */
	function surat_keluar(){
		$a['data']	= $this->model_admin->tampil_surat_keluar()->result_object();
		$a['page']	= "surat_keluar";
		
		$this->load->view('admin/index', $a);
	}

	function edit_surat_keluar($id){
		$a['editdata']	= $this->db->get_where('tb_surat_keluar',array('surat_id'=>$id))->result_object();		
		$a['page']	= "edit_surat_keluar";
		
		$this->load->view('admin/index', $a);
	}

	function update_surat_keluar(){
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');
		$no = $this->input->post('no');
		$tgl = $this->input->post('tgl');
		$untuk = $this->input->post('untuk');
		$perihal = $this->input->post('perihal');
		$ket = $this->input->post('ket');
		$object = array(
				'jenis_id' => $jenis,
				'no_surat' => $no,
				'tgl_surat' => $tgl,
				'untuk' => $untuk,
				'perihal' => $perihal,
				'ket' => $ket
			);
		$this->db->where('surat_id', $id);
		$this->db->update('tb_surat_keluar', $object); 

		redirect('admin/surat_keluar','refresh');
	}

	function hapus_surat_keluar($id){
		
		$this->model_admin->hapus_surat_keluar($id);
		redirect('admin/surat_keluar','refresh');
	}	

	/* Fungsi Manage User */
	function manage_user(){
		$a['data']	= $this->model_admin->tampil_user()->result_object();
		$a['page']	= "manage_user";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_user(){
		$a['page']	= "tambah_user";
		$a['options'] = $this->model_admin->get_level_options();
		
		$this->load->view('admin/index', $a);
	}

	function insert_user(){
		
		$email 	  = $this->input->post('email');
		$password = $this->input->post('password');
		$level	  = $this->input->post('level');
		$tgl_msk  = $this->input->post('tgl_msk');
		$nama	  = $this->input->post('nama');
		$jobs	  = $this->input->post('jobs');
		$office	  = $this->input->post('office');
		$gaji	  = $this->input->post('gaji');

		$object = array(
				'nama' => $nama,
				'tgl_msk' => date('Y-m-d', strtotime($tgl_msk)),
				'jobs' => $jobs,
				'office' => $office,
				'gaji' => $gaji
			);

		$last_id = $this->model_admin->insert_karyawan($object);

		$object = array(
				'id_karyawan' => $last_id,
				'email' => $email,
				'password' => md5($password),
				'nama' => $nama,
				'level' => $level
		);

		$this->model_admin->insert_user($object);

		redirect('admin/manage_user','refresh');
	}

	function edit_user($id){
		$a['editdata']	= $this->model_admin->edit_user($id)->result_object();		
		$a['page']	= "edit_user";
		
		$this->load->view('admin/index', $a);
	}

	function update_user(){
		$id 	  = $this->input->post('id');
		$email 	  = $this->input->post('email');
		$password = $this->input->post('password');
		$pass_old = $this->input->post('pass_old');
		$nama	  = $this->input->post('nama');

		if (empty($password)) {
			$object = array(

				'password' => $password,
				'nama' => $nama
			);
		}else{
			$object = array(
				'email' => $email,
				'password' => $password,
				'nama' => $nama
			);
		}

		
		$this->model_admin->update_user($id, $object);

		redirect('admin/manage_user','refresh');
	}

	function hapus_user($id){
		
		$this->model_admin->hapus_user($id);
		redirect('admin/manage_user','refresh');
		}
	}