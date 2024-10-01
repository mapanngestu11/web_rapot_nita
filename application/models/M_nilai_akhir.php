<?php
class M_nilai_akhir extends CI_Model
{
	
	function get_datasiswa_bynis($nis)
	{
		// var_dump($nis);
		$this->db->select('*');
		$this->db->from('tabel_siswa');
		$this->db->where('nis',$nis);
		$query =  $this->db->get('');
		return $query;
	}

	function get_datamapel_bynis($nis)
	{
		// var_dump($nis);
		$this->db->select('*');
		$this->db->from('tabel_nilai_mapel');
		$this->db->where('nis',$nis);
		$query =  $this->db->get('');
		return $query;
	}

	function get_datasosial_bynis($nis)
	{
		// var_dump($nis);
		$this->db->select('*');
		$this->db->from('tabel_nilai_sosial');
		$this->db->where('nis',$nis);
		$query =  $this->db->get('');
		return $query;
	}


	function get_dataspiritual_bynis($nis)
	{
		// var_dump($nis);
		$this->db->select('*');
		$this->db->from('tabel_nilai_spiritual');
		$this->db->where('nis',$nis);
		$query =  $this->db->get('');
		return $query;
	}

	function get_datakehadiran_bynis($nis)
	{
		// var_dump($nis);
		$this->db->select('*');
		$this->db->from('tabel_tidak_hadir');
		$this->db->where('nis',$nis);
		$query =  $this->db->get('');
		return $query;
	}

	function get_walas($nis)
	{
		// var_dump($nis);
		$this->db->select('*');
		$this->db->from('tabel_guru');
		$this->db->where('hak_akses','walas');
		$this->db->limit(1);
		$query =  $this->db->get('');
		return $query;
	}
	
	


}
