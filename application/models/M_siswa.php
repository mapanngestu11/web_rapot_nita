<?php
class M_siswa extends CI_Model
{
	

	private $_table = "tabel_siswa";

	function tampil_data()
	{
		return $this->db->get('tabel_siswa');
	}
	
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function delete_data($id_siswa)
	{
		$hsl = $this->db->query("DELETE FROM tabel_siswa WHERE id_siswa='$id_siswa'");
		return $hsl;
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function cek_siswa($u, $p)
	{

		$hasil = $this->db->query("SELECT * FROM tabel_siswa WHERE nis='$u' AND password =md5('$p')");
		return $hasil;
	}



}
