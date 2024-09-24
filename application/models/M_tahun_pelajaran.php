<?php
class M_tahun_pelajaran extends CI_Model
{
	

	private $_table = "tabel_tahun_pelajaran";

	function tampil_data()
	{
		return $this->db->get('tabel_tahun_pelajaran');
	}
	
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function delete_data($id_tapel)
	{
		$hsl = $this->db->query("DELETE FROM tabel_tahun_pelajaran WHERE id_tapel='$id_tapel'");
		return $hsl;
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}


}
