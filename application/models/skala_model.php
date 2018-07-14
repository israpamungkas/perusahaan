<?php 

/**
* 
*/
class skala_model extends CI_Model
{
	
	public function get_skala_options(){
		return $this->db->select('id_skala, nilai_skala, nama_skala')->from('tb_skala')->get()->result();
	} 
}

 ?>