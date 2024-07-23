<?php
class M_nilai_pembelajaran extends CI_Model
{
	

	private $_table = "tabel_kkm";

	function tampil_data()
	{
		return $this->db->get('tabel_kkm');
	}
	
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function delete_data($id_kkm)
	{
		$hsl = $this->db->query("DELETE FROM tabel_kkm WHERE id_kkm='$id_kkm'");
		return $hsl;
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}


	function input_nilai_mapel()
	{

		return $this->db->get('tabel_kkm');
	}


}
