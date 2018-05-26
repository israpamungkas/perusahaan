<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_karyawan extends CI_Model {

	
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
	public function tampil_nilai($id_user)
	{
			
		return $this->db->select('a.*, b.jenis_id, b.jenis_surat, DATE_ADD(tgl_msk, INTERVAL 90 DAY) as jatuh_tempo, DATEDIFF(DATE_ADD(tgl_msk, INTERVAL 90 DAY), CURDATE()) as selisih')
				 ->from('tb_karyawan a')
				 ->join('tb_jenis_surat b', 'a.jenis_id = b.jenis_id')
				 ->join('tb_user c', 'c.id_karyawan = a.id_karyawan')
				 ->where(array('c.id_user' => $id_user))->get();

		//return $this->db->query("SELECT *,DATE_ADD(tgl_msk, INTERVAL 90 DAY) as jatuh_tempo, DATEDIFF(DATE_ADD(tgl_msk, INTERVAL 90 DAY), CURDATE()) as selisih FROM tb_karyawan");
		//return $this->db->query("SELECT a.*, b.jenis_id, b.jenis_surat FROM tb_karyawan as a, tb_jenis_surat as b WHERE a.jenis_id=b.jenis_id");

		//return $this->db->query("SELECT a.*, b.jenis_id, b.jenis_nilai FROM tb_karyawan as a, tb_hmp_kriteria as b WHERE 
			//a.jenis_id=b.jenis_id ");
	}

	
	public function hapus_nilai($id)
	{
		return $this->db->delete('tb_karyawan', array('id_karyawan' => $id));
	}

/* Function for Cek Login */
	public function cek_login($email, $pass)
	{
		$array = array('email' => $email, 'password' => $pass);

		$query = $this->db->where($array);

		$query = $this->db->get('tb_user');

		return $query;
	}

	public function tampil_user($id_user)
	{
		return $this->db->from('tb_user')->where(array('id_user' => $id_user))->get();
	}

	public function insert_user($object)
	{
		$this->db->insert('tb_user', $object);
	}

	public function edit_user($id)
	{
		return $this->db->get_where('tb_user',array('id_user'=>$id));
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
		return $this->db->query("SELECT tj.jenis_surat, COUNT( tk.id_karyawan ) AS total FROM tb_karyawan AS tk JOIN tb_jenis_surat AS tj ON tk.jenis_id = tj.jenis_id WHERE NOT tk.jenis_id =  '1' GROUP BY tk.jenis_id");
	}

	//public function get_jenis_id_rows(){
	//	return $this->db->query("SELECT tj.jenis_surat, COUNT(tk.id_karyawan) as total from tb_karyawan as tk JOIN tb_jenis_surat as tj ON tk.jenis_id = tj.jenis_id WHERE tk.office = 'Head Office' GROUP BY tk.jenis_id");
	//}

	public function get_score_category(){
		return $this->db->query("SELECT keterangan, COUNT( id_karyawan ) AS total FROM tb_hmp_kriteria AS th, tb_karyawan AS tk WHERE tk.jml_id >= th.min AND tk.jml_id <= th.maks and not th.jenis_id = '0' GROUP BY th.jenis_id");
	}

	public function get_score_ho(){
		return $this->db->query("SELECT keterangan, COUNT(id_karyawan) as total FROM tb_hmp_kriteria as th, tb_karyawan as tk WHERE tk.jml_id >= th.min AND tk.jml_id <=th.maks AND tk.office = 'Head Office' GROUP BY th.jenis_id");
	}

}

