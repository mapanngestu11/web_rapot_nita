<?php
class M_nilai_mapel extends CI_Model
{
	

	private $_table = "tabel_nilai_mapel";


	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	
	


}
