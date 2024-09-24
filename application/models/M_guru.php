<?php
class M_guru extends CI_Model
{
	

	private $_table = "tabel_guru";
	
	function cek_guru($u, $p)
	{

		$hasil = $this->db->query("SELECT * FROM tabel_guru WHERE username='$u' AND password =md5('$p')");
		return $hasil;
	}



	function tampil_data()
	{
		return $this->db->get('tabel_guru');
	}
	
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function delete_data($id_guru)
	{
		$hsl = $this->db->query("DELETE FROM tabel_guru WHERE id_guru='$id_guru'");
		return $hsl;
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}


}
