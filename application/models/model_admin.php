<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function tampil_kriteria()
	{
		return $this->db->get('tb_kriteria');
	}

	public function tampil_subkriteria()
	{
		return $this->db->get('tb_sub_kriteria');
	}
	
	public function tampil_jenis()
	{
		return $this->db->get('tb_jenis_surat');
	}

/*	public function edit_jenis($id)
	{
		return $this->db->get_where('tb_jenis_surat',array('jenis_id'=>$id));
	}
*/
	
	public function hapus_jenis($id)
	{
		return $this->db->delete('tb_jenis_surat', array('jenis_id' => $id));
	}

/* Function Surat Keluar */
	public function tampil_surat_keluar()
	{
		return $this->db->query("SELECT a.*, b.jenis_id, b.jenis_surat FROM tb_surat_keluar as a, tb_jenis_surat as b WHERE a.jenis_id=b.jenis_id");
	}

	public function hapus_surat_keluar($id)
	{
		return $this->db->delete('tb_surat_keluar', array('surat_id' => $id));
	}

/*  Function for Himpunan*/
	public function tampil_himpunan()
	{
		return $this->db->get('tb_hmp_kriteria');
	}

/*  Function for Input Nilai */
			public function tampil_nilai()
	{
		
		return $this->db->select('a.*, b.jenis_id, b.jenis_surat, d.*, DATE_ADD(tgl_msk, INTERVAL 90 DAY) as jatuh_tempo, DATEDIFF(DATE_ADD(tgl_msk, INTERVAL 90 DAY), CURDATE()) as selisih')
				 ->from('tb_penilaian a')
				 ->join('tb_jenis_surat b', 'a.jenis_id = b.jenis_id')
				 ->join('tb_user c', 'a.id_karyawan = c.id_karyawan')
				 ->join('tb_karyawan d', 'a.id_karyawan = d.id_karyawan')
				 ->get();


		return $this->db->query("SELECT a.*, b.jenis_id, b.jenis_surat FROM tb_karyawan as a, tb_jenis_surat as b WHERE a.jenis_id=b.jenis_id");

		return $this->db->query("SELECT a.*, b.jenis_id, b.jenis_nilai FROM tb_karyawan as a, tb_hmp_kriteria as b WHERE 
		a.jenis_id=b.jenis_id ");
		
	}
	
	public function hapus_nilai($id)
	{
		return $this->db->delete('tb_karyawan', array('id_karyawan' => $id));
	}

/*  Function for Tampil Kehadiran */
	public function tampil_kehadiran()
	{	
		return $this->db->select('id_karyawan, nama, alpha, izin, sakit, terlambat, sp') ->from ("tb_karyawan")->get();	
	}

	public function edit_kehadiran($id)
	{
		return $this->db->get_where('tb_karyawan',array('id_karyawan'=>$id));
	}

	public function update_kehadiran($id, $object)
	{
		$this->db->where('id_karyawan', $id);
		$this->db->update('tb_karyawan', $object); 
	}

/* Function for Cek Login */
	public function cek_login($email, $pass)
	{
		$array = array('email' => $email, 'password' => $pass);

		$query = $this->db->where($array);

		$query = $this->db->get('tb_user');

		return $query;
	}

	public function tampil_user()
	{
		return $this->db->select('a.*, b.level as status')->from('tb_user a')->join('tb_level b', 'a.level=b.id')->get();
		//return $this->db->get('tb_user', array('id_user'));
	
	}

	public function insert_user($object)
	{
		$this->db->insert('tb_user', $object);
	}

	public function insert_karyawan($object)
	{
		$this->db->trans_begin();
		$this->db->insert('tb_karyawan', $object);
		$last_id = $this->db->insert_id();
		$this->db->trans_complete();

		return $last_id;
	}

	public function edit_user($id)
	{
		return $this->db->get_where('tb_user', array('id_user' => $id));
	}

	public function update_user($id, $object)
	{
		$this->db->where('id_user', $id);
		$this->db->update('tb_user', $object); 
	}

	public function hapus_user($id)
	{
		return $this->db->delete('tb_user', array('id_user' => $id));
	}

	/*  Function for Grafik */
	public function get_jenis_id_rows(){
		return $this->db->query("SELECT tj.jenis_surat, COUNT( tk.id_karyawan ) AS total FROM tb_penilaian AS tk JOIN tb_jenis_surat AS tj ON tk.jenis_id = tj.jenis_id WHERE NOT tk.jenis_id =  '1' GROUP BY tk.jenis_id");
	}

	//public function get_jenis_id_rows(){
	//	return $this->db->query("SELECT tj.jenis_surat, COUNT(tk.id_karyawan) as total from tb_karyawan as tk JOIN tb_jenis_surat as tj ON tk.jenis_id = tj.jenis_id WHERE tk.office = 'Head Office' GROUP BY tk.jenis_id");
	//}

	public function get_score_category(){
		return $this->db->query("SELECT keterangan, COUNT( id_karyawan ) AS total FROM tb_hmp_kriteria AS th, tb_penilaian AS tk WHERE tk.jml_id >= th.min AND tk.jml_id <= th.maks and not th.jenis_id = '0' GROUP BY th.jenis_id");
	}

	public function get_options()
	{
		return $this->db->select('id_karyawan, nama')->from('tb_karyawan')->get()->result();
	}

	public function get_level_options()
	{
		return $this->db->select('id, level')->from('tb_level')->get()->result();	
	}

	public function get_skala_kriteria(){
		return $this->db->select('id_kriteria, nama, skala')->from('tb_kriteria')->order_by('id_kriteria')->get()->result();
	}

	public function get_skala_sub_kriteria($id_kriteria){
		return $this->db->select('id_sub_kriteria, nama, skala')->from('tb_sub_kriteria')->where('id_kriteria', $id_kriteria)->order_by('id_sub_kriteria')->get()->result();
	}

}