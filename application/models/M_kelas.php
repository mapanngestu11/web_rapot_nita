<?php
class M_kelas extends CI_Model
{
	

	private $_table = "tabel_kelas";

	function tampil_data()
	{
		return $this->db->get('tabel_kelas');
	}
	
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function delete_data($id_kelas)
	{
		$hsl = $this->db->query("DELETE FROM tabel_kelas WHERE id_kelas='$id_kelas'");
		return $hsl;
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}


}
