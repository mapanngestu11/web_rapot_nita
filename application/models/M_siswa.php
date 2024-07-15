<?php
class M_siswa extends CI_Model
{
	
	function cek_siswa($u, $p)
	{

		$hasil = $this->db->query("SELECT * FROM tabel_siswa WHERE username='$u' AND password =md5('$p')");
		return $hasil;
	}

}
