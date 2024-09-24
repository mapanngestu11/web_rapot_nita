<?php
class M_data_sekolah extends CI_Model
{
	

	private $_table = "tabel_data_sekolah";

	function tampil_data()
	{
		return $this->db->get('tabel_data_sekolah');
	}
	
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function delete_data($id_data_sekolah)
	{
		$hsl = $this->db->query("DELETE FROM tabel_data_sekolah WHERE id_data_sekolah='$id_data_sekolah'");
		return $hsl;
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}


}
