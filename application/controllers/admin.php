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
			$a['kehadiran']	= $this->model_admin->tampil_kehadiran()->num_rows();
			$a['himpunan']	= $this->model_admin->tampil_himpunan()->num_rows();
			$a['kriteria']	= $this->model_admin->tampil_kriteria()->num_rows();
			//$a['kriteria_khusus']	= $this->model_admin->tampil_kriteria_khusus()->num_rows();
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
		$a['kriteria']	= $this->model_admin->tampil_kriteria()->result_object();
		$a['subkriteria']	= $this->model_admin->tampil_subkriteria()->result_object();
		$a['page']	= "kriteria";
		
		$this->load->view('admin/index', $a);
	}

	function edit_nilai_kriteria(){
		$this->load->model('skala_model');
		$a['kriteria']	= $this->model_admin->tampil_kriteria()->result_object();
		$a['subkriteria']	= $this->model_admin->tampil_subkriteria()->result_object();
		$a['skala']		= $this->skala_model->get_skala_options();
		$a['page']	= "edit_nilai_kriteria";
		
		$this->load->view('admin/index', $a);
	}

	function insert_edit_kriteria(){
		$umum = $this->input->post('umum');
        $khusus = $this->input->post('khusus');
        $kehadiran = $this->input->post('kehadiran');
        $hukuman = $this->input->post('hukuman');
        $proaktif = $this->input->post('proaktif');
        $percaya_diri = $this->input->post('percaya_diri');
        $disiplin = $this->input->post('disiplin');
        $mandiri = $this->input->post('mandiri');
        $emosi = $this->input->post('emosi');
        $kerjasama = $this->input->post('kerjasama');
        $pengetahuan = $this->input->post('pengetahuan');
        $akurasi = $this->input->post('akurasi');
        $keputusan = $this->input->post('keputusan');
        $tanggung_jawab = $this->input->post('tanggung_jawab');
        $hasil_kerjaan = $this->input->post('hasil_kerjaan');
        $alpha = $this->input->post('alpha');
        $izin = $this->input->post('izin');
        $sakit = $this->input->post('sakit');
        $sp = $this->input->post('sp');
        $terlambat = $this->input->post('terlambat');

        $this->db->update('tb_kriteria', array('skala' => $umum), array('id_kriteria' => 1));
        $this->db->update('tb_kriteria', array('skala' => $khusus), array('id_kriteria' => 2));
        $this->db->update('tb_kriteria', array('skala' => $kehadiran), array('id_kriteria' => 3));
        $this->db->update('tb_kriteria', array('skala' => $hukuman), array('id_kriteria' => 4));

        $this->db->update('tb_sub_kriteria', array('skala' => $proaktif), array('id_sub_kriteria' => 1));
        $this->db->update('tb_sub_kriteria', array('skala' => $percaya_diri), array('id_sub_kriteria' => 2));
        $this->db->update('tb_sub_kriteria', array('skala' => $disiplin), array('id_sub_kriteria' => 3));
        $this->db->update('tb_sub_kriteria', array('skala' => $mandiri), array('id_sub_kriteria' => 4));
        $this->db->update('tb_sub_kriteria', array('skala' => $emosi), array('id_sub_kriteria' => 5));
        $this->db->update('tb_sub_kriteria', array('skala' => $kerjasama), array('id_sub_kriteria' => 6));
        $this->db->update('tb_sub_kriteria', array('skala' => $pengetahuan), array('id_sub_kriteria' => 7));
        $this->db->update('tb_sub_kriteria', array('skala' => $akurasi), array('id_sub_kriteria' => 8));
        $this->db->update('tb_sub_kriteria', array('skala' => $keputusan), array('id_sub_kriteria' => 9));
        $this->db->update('tb_sub_kriteria', array('skala' => $tanggung_jawab), array('id_sub_kriteria' => 10));
        $this->db->update('tb_sub_kriteria', array('skala' => $hasil_kerjaan), array('id_sub_kriteria' => 11));
        $this->db->update('tb_sub_kriteria', array('skala' => $alpha), array('id_sub_kriteria' => 12));
        $this->db->update('tb_sub_kriteria', array('skala' => $izin), array('id_sub_kriteria' => 13));
        $this->db->update('tb_sub_kriteria', array('skala' => $sakit), array('id_sub_kriteria' => 14));
        $this->db->update('tb_sub_kriteria', array('skala' => $sp), array('id_sub_kriteria' => 15));
        $this->db->update('tb_sub_kriteria', array('skala' => $terlambat), array('id_sub_kriteria' => 16));

        $get_skala_kriteria = $this->model_admin->get_skala_kriteria();
        $get_skala_sub_umum = $this->model_admin->get_skala_sub_kriteria(1);
        $get_skala_sub_khusus = $this->model_admin->get_skala_sub_kriteria(2);
        $get_skala_sub_kehadiran = $this->model_admin->get_skala_sub_kriteria(3);
        $get_skala_sub_hukuman = $this->model_admin->get_skala_sub_kriteria(4);

        $skala_kriteria = array();
        $skala_sub_umum = array();
        $skala_sub_khusus = array();
        $skala_sub_kehadiran = array();
        $skala_sub_hukuman = array();           

        $a = 0;
        $b = 0;
        $c = 0;
        $d = 0;
        $e = 0;

        foreach ($get_skala_kriteria as $item) {
        	$skala_kriteria[$a] = $item->skala;
        	$a++;
        }

        foreach ($get_skala_sub_umum as $item1) {
        	$skala_sub_umum[$b] = $item1->skala;
        	$b++;
        }

        foreach ($get_skala_sub_khusus as $item2) {
        	$skala_sub_khusus[$c] = $item2->skala;
        	$c++;
        }

        foreach ($get_skala_sub_kehadiran as $item3) {
        	$skala_sub_kehadiran[$d] = $item3->skala;
        	$d++;
        }

        foreach ($get_skala_sub_hukuman as $item4) {
        	$skala_sub_hukuman[$e] = $item4->skala;
        	$e++;
        }         

        $this->load->library('ahp_lib');  
        $total_kriteria = count($skala_kriteria);
        $total_sub_umum = count($skala_sub_umum);
        $total_sub_khusus = count($skala_sub_khusus);
        $total_sub_kehadiran = count($skala_sub_kehadiran);
        $total_sub_hukuman = count($skala_sub_hukuman);

        $matriks_kriteria = $this->ahp_lib->matriks_berpasangan($skala_kriteria);
        $matriks_sub_umum = $this->ahp_lib->matriks_berpasangan($skala_sub_umum);
        $matriks_sub_khusus = $this->ahp_lib->matriks_berpasangan($skala_sub_khusus);
        $matriks_sub_kehadiran = $this->ahp_lib->matriks_berpasangan($skala_sub_kehadiran);
        $matriks_sub_hukuman = $this->ahp_lib->matriks_berpasangan($skala_sub_hukuman);

		$normalisasi_kriteria = $this->ahp_lib->normalisasi_matriks($matriks_kriteria, $total_kriteria);
		$normalisasi_sub_umum = $this->ahp_lib->normalisasi_matriks($matriks_sub_umum, $total_sub_umum);
		$normalisasi_sub_khusus = $this->ahp_lib->normalisasi_matriks($matriks_sub_khusus, $total_sub_khusus);
		$normalisasi_sub_kehadiran = $this->ahp_lib->normalisasi_matriks($matriks_sub_kehadiran, $total_sub_kehadiran);
		$normalisasi_sub_hukuman = $this->ahp_lib->normalisasi_matriks($matriks_sub_hukuman, $total_sub_hukuman);

        $eigen_vector_kriteria = $this->ahp_lib->eigen_vector($normalisasi_kriteria, $total_kriteria);
        $eigen_vector_sub_umum = $this->ahp_lib->eigen_vector($normalisasi_sub_umum, $total_sub_umum);
        $eigen_vector_sub_khusus = $this->ahp_lib->eigen_vector($normalisasi_sub_khusus, $total_sub_khusus);
        $eigen_vector_sub_kehadiran = $this->ahp_lib->eigen_vector($normalisasi_sub_kehadiran, $total_sub_kehadiran);
        $eigen_vector_sub_hukuman = $this->ahp_lib->eigen_vector($normalisasi_sub_hukuman, $total_sub_hukuman);

        $lamda_maks_kriteria = $this->ahp_lib->lamda_maks($eigen_vector_kriteria, $matriks_kriteria, $total_kriteria);
        $lamda_maks_sub_umum = $this->ahp_lib->lamda_maks($eigen_vector_sub_umum, $matriks_sub_umum, $total_sub_umum);
        $lamda_maks_sub_khusus = $this->ahp_lib->lamda_maks($eigen_vector_sub_khusus, $matriks_sub_khusus, $total_sub_khusus);
        $lamda_maks_sub_kehadiran = $this->ahp_lib->lamda_maks($eigen_vector_sub_kehadiran, $matriks_sub_kehadiran, $total_sub_kehadiran);
        $lamda_maks_sub_hukuman = $this->ahp_lib->lamda_maks($eigen_vector_sub_hukuman, $matriks_sub_hukuman, $total_sub_hukuman);



        for ($i = 0; $i < $total_kriteria; $i++) { 
        	$id = $i + 1;
        	$this->db->update('tb_kriteria', array('bobot' => $eigen_vector_kriteria[$i]), array('id_kriteria' => $id));
        }

        for ($i = 0; $i < $total_sub_umum; $i++) { 
        	$id = $i + 1;
        	$this->db->update('tb_sub_kriteria', array('bobot' => $eigen_vector_sub_umum[$i], 'bobot_hasil' => ($eigen_vector_sub_umum[$i] * $eigen_vector_kriteria[0])), array('id_sub_kriteria' => $id));

        }

        for ($i = 0; $i < $total_sub_khusus; $i++) { 
        	$id = $i + 7;
        	$this->db->update('tb_sub_kriteria', array('bobot' => $eigen_vector_sub_khusus[$i], 'bobot_hasil' => ($eigen_vector_sub_khusus[$i] * $eigen_vector_kriteria[1])), array('id_sub_kriteria' => $id));
        }

        for ($i = 0; $i < $total_sub_kehadiran; $i++) { 
        	$id = $i + 12;
        	$this->db->update('tb_sub_kriteria', array('bobot' => $eigen_vector_sub_kehadiran[$i], 'bobot_hasil' => ($eigen_vector_sub_kehadiran[$i] * $eigen_vector_kriteria[2])), array('id_sub_kriteria' => $id));
        }

        for ($i = 0; $i < $total_sub_hukuman; $i++) { 
        	$id = $i + 15;
        	$this->db->update('tb_sub_kriteria', array('bobot' => $eigen_vector_sub_hukuman[$i], 'bobot_hasil' => ($eigen_vector_sub_hukuman[$i] * $eigen_vector_kriteria[3])), array('id_sub_kriteria' => $id));
        }
       
        redirect('admin/kriteria', 'refresh');
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

		$bobot_hasil = $this->db->select('bobot_hasil')->from('tb_sub_kriteria')->get()->result();
		
		$a = 0;
		$jumlah = 0;
		$bobot = array();
		$nilai = array();

		$nilai[0] = $jenis1;
		$nilai[1] = $jenis2;
		$nilai[2] = $jenis3;
		$nilai[3] = $jenis4;
		$nilai[4] = $jenis5;
		$nilai[5] = $jenis6;
		$nilai[6] = $jenis7;
		$nilai[7] = $jenis8;
		$nilai[8] = $jenis9;
		$nilai[9] = $jenis10;
		$nilai[10] = $jenis11;
		$nilai[11] = $jenis12;
		$nilai[12] = $jenis13;
		$nilai[13] = $jenis14;
		$nilai[14] = $jenis15;
		$nilai[15] = $jenis16;		

		foreach ($bobot_hasil as $item) {
			$bobot[$a] = $item->bobot_hasil;
			$a++;
		}		

		for ($i = 0; $i < 16; $i++) { 
			$jumlah = $jumlah + ($nilai[$i] * $bobot[$i]);
		}
		
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
				'jml_id' => $jumlah,
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
		$jenis = $this->input->post('jenis');

		$bobot_hasil = $this->db->select('bobot_hasil')->from('tb_sub_kriteria')->order_by('id_sub_kriteria')->get()->result();
		
		$a = 0;
		$jumlah = 0;
		$bobot = array();
		$nilai = array();

		$nilai[0] = $jenis1;
		$nilai[1] = $jenis2;
		$nilai[2] = $jenis3;
		$nilai[3] = $jenis4;
		$nilai[4] = $jenis5;
		$nilai[5] = $jenis6;
		$nilai[6] = $jenis7;
		$nilai[7] = $jenis8;
		$nilai[8] = $jenis9;
		$nilai[9] = $jenis10;
		$nilai[10] = $jenis11;
		$nilai[11] = $jenis12;
		$nilai[12] = $jenis13;
		$nilai[13] = $jenis14;
		$nilai[14] = $jenis15;
		$nilai[15] = $jenis16;

		foreach ($bobot_hasil as $item) {
			$bobot[$a] = $item->bobot_hasil;
			$a++;
		}

		for ($i = 0; $i < 16; $i++) { 
			$jumlah = $jumlah + ($nilai[$i] * $bobot[$i]);
		}

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
				'jml_id' => $jumlah,
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

	/* Fungsi Kehadiran */
	function kehadiran(){
		$a['data']	= $this->model_admin->tampil_kehadiran()->result_object();
		$a['page']	= "kehadiran";
		
		$this->output->enable_profiler(true);
		$this->load->view('admin/index', $a);
	}

	function tambah_kehadiran(){
		$a['page']	= "tambah_kehadiran";
		$a['karyawan'] = $this->model_admin->get_options();
		
		$this->load->view('admin/index', $a);
	}

	function insert_kehadiran(){
		
		$idkaryawan = $this->input->post('idkaryawan');
		$alpha = $this->input->post('alpha');
		$izin = $this->input->post('izin');
		$sakit = $this->input->post('sakit');
		$terlambat = $this->input->post('terlambat');
		$sp = $this->input->post('sp');
		$object = array(
				'alpha' => $alpha,
				'izin' => $izin,
				'sakit' => $sakit,
				'terlambat' => $terlambat,
				'sp' => $sp,
			);
		$this->db->insert('tb_karyawan', $object);

		redirect('admin/kehadiran','refresh');
	}

	function edit_kehadiran($id){
		$a['editdata']	= $this->db->get_where('tb_karyawan',array('id_karyawan'=>$id))->result_object();
		$a['page']	= "edit_kehadiran";
		
		$this->load->view('admin/index', $a);
	}

	function update_kehadiran(){

		$id = $this->input->post('id');
		$alpha = $this->input->post('alpha');
		$izin = $this->input->post('izin');
		$sakit = $this->input->post('sakit');
		$terlambat = $this->input->post('terlambat');
		$sp = $this->input->post('sp');
		$object = array(
				'alpha' => $alpha,
				'izin' => $izin,
				'sakit' => $sakit,
				'terlambat' => $terlambat,
				'sp' => $sp,
			);
		$this->db->where('id_karyawan', $id);
		$this->db->update('tb_karyawan', $object); 

		redirect('admin/kehadiran','refresh');

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