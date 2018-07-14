<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('level')){
			redirect ('login');
		}
			$id_user = $this->session->userdata('id_user');
			$a['jenis']	= $this->model_general->tampil_jenis()->num_rows(); //untuk ambil data dari file model_admin.php dengan function tampil_jenis
			$a['manage_user']	= $this->model_admin->tampil_user()->num_rows();
			$a['surat_keluar']	= $this->model_admin->tampil_surat_keluar()->num_rows();
			$a['input_nilai']	= $this->model_admin->tampil_nilai()->num_rows();
			$a['himpunan']	= $this->model_admin->tampil_himpunan()->num_rows();
			$a['kriteria']	= $this->model_admin->tampil_kriteria()->num_rows();
			$a['kriteria_khusus']	= $this->model_admin->tampil_kriteria_khusus()->num_rows();
			$a['page']	= "home";

			$this->load->view('general/index', $a);
		}

		public function get_data_status(){
		$data = $this->model_general->get_jenis_id_rows()->result_object();

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
		$data = $this->model_general->get_score_category()->result_object();

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

	public function get_score_ho(){
		$data = $this->model_karyawan->get_score_ho()->result_object();

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

	/* Fungsi Himpunan */
	function himpunan(){
		$a['data']	= $this->model_general->tampil_himpunan()->result_object();
		$a['page']	= "himpunan";
		
		$this->load->view('general/index', $a);
	}

	/* Fungsi Jenis Surat */
	function jenis_surat(){
		$a['data']	= $this->model_general->tampil_jenis()->result_object();
		$a['page']	= "jenis_surat";
		
		$this->load->view('general/index', $a);
	}

	function tambah_jenis(){
		$a['page']	= "tambah_jenis_surat";
		
		$this->load->view('general/index', $a);
	}

	function insert_jenis(){
		
		$jenis = $this->input->post('jenis');
		$object = array(
				'jenis_surat' => $jenis
			);
		$this->db->insert('tb_jenis_surat', $object);

		redirect('general/jenis_surat','refresh');
	}

	function edit_jenis($id){
		$a['editdata']	= $this->db->get_where('tb_jenis_surat',array('jenis_id'=>$id))->result_object();		
		$a['page']	= "edit_jenis_surat";
		
		$this->load->view('general/index', $a);
	}

	function update_jenis(){
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');
		$object = array(
				'jenis_surat' => $jenis
			);
		$this->db->where('jenis_id', $id);
		$this->db->update('tb_jenis_surat', $object); 

		redirect('general/jenis_surat','refresh');
	}

	function hapus_jenis($id){
		
		$this->model_general->hapus_jenis($id);
		redirect('general/jenis_surat','refresh');
	}

	/* Fungsi Manage Nilai */
	function input_nilai(){
		$a['data']	= $this->model_general->tampil_nilai()->result_object();
		$a['page']	= "input_nilai";
		
		$this->output->enable_profiler(true);
		$this->load->view('general/index', $a);
	
	}

	function tambah_nilai(){
		$a['page']	= "tambah_nilai";
		
		$this->load->view('general/index', $a);
	}

	function insert_nilai(){
		
		$nama = $this->input->post('nama');
		$tgl = $this->input->post('tgl');
		$jobs = $this->input->post('jobs');
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
		$jml_id = ($jenis1)*5+($jenis2)*5+($jenis3)*8+($jenis4)*6+($jenis5)*4+($jenis6)*5+($jenis7)*5+($jenis8)*10+($jenis9)*5+($jenis10)*5;
		$jenis = $this->input->post('jenis');
		$object = array(
				'nama' => $nama,
				'tgl_msk' => $tgl,
				'jobs' => $jobs,
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
				'jml_id' => $jml_id,
				'jenis_id' => $jenis,
			);
		$this->db->insert('tb_karyawan', $object);

		redirect('general/input_nilai	','refresh');
	}


	function edit_nilai($id){
		$a['editdata']	= $this->db->select('*')->from('tb_penilaian tp')->join('tb_karyawan tk', 'tp.id_karyawan=tk.id_karyawan')->where('tp.id_karyawan', $id)->get()->result();		
		$a['page']	= "edit_nilai";
		
		$this->load->view('general/index', $a);
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

		redirect('general/input_nilai','refresh');
	}


	function hapus_nilai($id){
		
		$this->model_admin->hapus_nilai($id);
		redirect('general/input_nilai','refresh');
	}

	/* Fungsi Surat Keluar */
	function surat_keluar(){
		$a['data']	= $this->model_general->tampil_surat_keluar()->result_object();
		$a['page']	= "surat_keluar";
		
		$this->load->view('general/index', $a);
	}

	function edit_surat_keluar($id){
		$a['editdata']	= $this->db->get_where('tb_surat_keluar',array('surat_id'=>$id))->result_object();		
		$a['page']	= "edit_surat_keluar";
		
		$this->load->view('general/index', $a);
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

		redirect('general/surat_keluar','refresh');
	}

	function hapus_surat_keluar($id){
		
		$this->model_general->hapus_surat_keluar($id);
		redirect('general/surat_keluar','refresh');
	}	

	/* Fungsi Manage User */
	function manage_user(){
		$id_user = $this->session->userdata('id_user');
		$a['data']	= $this->model_general->tampil_user($id_user)->result_object();
		$a['page']	= "manage_user";
		
		$this->load->view('general/index', $a);
	}

	function tambah_user(){
		$a['page']	= "tambah_user";
		
		$this->load->view('general/index', $a);
	}

	function insert_user(){
		
		$email 	  = $this->input->post('email');
		$password = $this->input->post('password');
		$nama	  = $this->input->post('nama');

		$object = array(
				'email' => $email,
				'password' => md5($password),
				'nama' => $nama
			);
		$this->model_general->insert_user($object);

		redirect('general/manage_user','refresh');
	}

	function edit_user($id){
		$a['editdata']	= $this->model_general->edit_user($id)->result_object();		
		$a['page']	= "edit_user";
		
		$this->load->view('general/index', $a);
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

		
		$this->model_general->update_user($id, $object);

		redirect('general/manage_user','refresh');
	}

	function hapus_user($id){
		
		$this->model_general->hapus_user($id);
		redirect('general/manage_user','refresh');
		}
	}


