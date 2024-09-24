<?php
class M_mapel extends CI_Model
{
	

	private $_table = "tabel_mapel";

	function tampil_data()
	{
		return $this->db->get('tabel_mapel');
	}
	
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function delete_data($id_mapel)
	{
		$hsl = $this->db->query("DELETE FROM tabel_mapel WHERE id_mapel='$id_mapel'");
		return $hsl;
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}


}
