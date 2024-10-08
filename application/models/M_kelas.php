<?php
class M_kelas extends CI_Model
{
	

	private $_table = "tabel_kelas";

	function tampil_data()
	{
		return $this->db->get('tabel_kelas');
	}
	
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function delete_data($id_kelas)
	{
		$hsl = $this->db->query("DELETE FROM tabel_kelas WHERE id_kelas='$id_kelas'");
		return $hsl;
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function tampil_data_siswa ()
	{
		$this->db->select('
			a.kelas as nama_kelas,
			COUNT(a.id_siswa) as jumlah_siswa
			');
		$this->db->from('tabel_siswa as a');
		$this->db->join('tabel_kelas as b', 'b.tingkatan = a.kelas','left');
		$this->db->group_by('b.nama_kelas');
		$query = $this->db->get();
		return $query;
	}
	function tampil_data_nilai_mapel_siswa_byclass ($nama_kelas)
	{

		$this->db->select('
			a.nis,
			a.nama_siswa,
			a.kelas,
			b.nilai_pengetahuan,
			b.nilai_keterampilan,
			b.nilai_pts,
			b.nilai_pas,
			b.deskripsi

			');
		$this->db->from('tabel_siswa as a');
		$this->db->join('tabel_nilai_mapel as b', 'b.nis = a.nis','left');
		$this->db->where('a.kelas',$nama_kelas);
		// $this->db->where('b.mapel',$mapel);
		$query = $this->db->get();
		return $query;
	}
	function tampil_data_nilai_sosial_siswa_byclass ($nama_kelas)
	{

		$this->db->select('
			a.nis,
			a.nama_siswa,
			a.kelas,
			b.predikat,
			b.deskripsi

			');
		$this->db->from('tabel_siswa as a');
		$this->db->join('tabel_nilai_sosial as b', 'b.nis = a.nis','left');
		$this->db->where('a.kelas',$nama_kelas);
		// $this->db->where('b.mapel',$mapel);
		$query = $this->db->get();
		return $query;
	}
	function tampil_data_nilai_spiritual_siswa_byclass ($nama_kelas)
	{

		$this->db->select('
			a.nis,
			a.nama_siswa,
			a.kelas,
			b.predikat,
			b.deskripsi

			');
		$this->db->from('tabel_siswa as a');
		$this->db->join('tabel_nilai_spiritual as b', 'b.nis = a.nis','left');
		$this->db->where('a.kelas',$nama_kelas);
		// $this->db->where('b.mapel',$mapel);
		$query = $this->db->get();
		return $query;
	}

	function tampil_data_kehdairan_byclass ($nama_kelas)
	{

		$this->db->select('
			a.nis,
			a.nama_siswa,
			a.kelas,
			b.sakit,
			b.izin,
			b.alpa

			');
		$this->db->from('tabel_siswa as a');
		$this->db->join('tabel_tidak_hadir as b', 'b.nis = a.nis','left');
		$this->db->where('a.kelas',$nama_kelas);
		// $this->db->where('b.mapel',$mapel);
		$query = $this->db->get();
		return $query;
	}

	function tampil_data_nilai_prestasi_siswa_byclass($nama_kelas)
	{

		$this->db->select('
			a.nis,
			a.nama_siswa,
			a.kelas,
			b.jenis_prestasi,
			b.keterangan

			');
		$this->db->from('tabel_siswa as a');
		$this->db->join('tabel_prestasi as b', 'b.nis = a.nis','left');
		$this->db->where('a.kelas',$nama_kelas);
		// $this->db->where('b.mapel',$mapel);
		$query = $this->db->get();
		return $query;
	}
	function get_walas($kelas)
	{
		$this->db->select('walas');
		$this->db->from('tabel_kelas');
		$this->db->where('tingkatan',$kelas);
		// $this->db->where('b.mapel',$mapel);
		$query = $this->db->get();
		return $query;

	}



}
