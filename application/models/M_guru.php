<?php
class M_guru extends CI_Model
{
	
	function cek_guru($u, $p)
	{

		$hasil = $this->db->query("SELECT * FROM tabel_guru WHERE username='$u' AND password =md5('$p')");
		return $hasil;
	}

}
