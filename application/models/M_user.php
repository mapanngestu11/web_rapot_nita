<?php
class M_user extends CI_Model
{

	private $_table = "tabel_user";

	function cek_user($u, $p)
	{

		$hasil = $this->db->query("SELECT * FROM tabel_user WHERE username='$u' AND password =md5('$p')");
		return $hasil;
	}

	function tampil_data()
	{
		return $this->db->get('tabel_user');
	}
	
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function delete_data($id_user)
	{
		$hsl = $this->db->query("DELETE FROM tabel_user WHERE id_user='$id_user'");
		return $hsl;
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}


}
