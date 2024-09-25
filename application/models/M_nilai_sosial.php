<?php
class M_nilai_sosial extends CI_Model
{
	

	private $_table = "tabel_nilai_sosial";


	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function cek_nis($nis)
	{
		// var_dump($nis);
		$this->db->select('*');
		$this->db->from('tabel_nilai_sosial');
		$this->db->where('nis',$nis);
		$query =  $this->db->get('');
		return $query;
	}
	


}
