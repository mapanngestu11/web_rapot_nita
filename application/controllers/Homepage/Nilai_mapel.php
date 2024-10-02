<?php defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_mapel  extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->helper('url');
        // $this->load->model('M_user');
    $this->load->model('M_kelas');
    $this->load->model('M_nilai_mapel');
    $this->title = "Data Nilai | SMK BANI USMAN MANUNGGAL";
    if ($this->session->userdata('masuk') != TRUE) {
      $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
      $url = base_url('Login');
      redirect($url);
    }
    
  }

  public function index()
  {

    $data['title'] = $this->title;
    $data['button'] = 'Data Nilai Mapel';
    $data['table'] = 'Informasi Data Nilai Mata Pelajaran Mata Pelajaran';
    $data['data_kelas'] = $this->M_kelas->tampil_data_siswa();
    $this->load->view('Homepage/List.input.nilai.mapel.php',$data);
  }



  public function rapot()
  {

    $data['title'] = $this->title;
    $data['table'] = 'Informasi Data Rapot Siswa';
    $this->load->view('Homepage/List.rapot.php',$data);
  }

  public function Listcheck($nama_kelas)
  {
   $data['title'] = $this->title;
   $data['button'] = 'Data Nilai Mapel';
   $data['table'] = 'Informasi Data Nilai Mata Pelajaran Mata Pelajaran';
   $mapel = NULL;
   $data['data_kelas'] = $this->M_kelas->tampil_data_nilai_mapel_siswa_byclass($nama_kelas);

   $this->load->view('Homepage/List.input.nilai.mapel.add.php',$data);
 }

 public function update()
 {
  date_default_timezone_set("Asia/Jakarta");
  $nis = $this->input->post('nis');
  // $nis = '7';
  $cek = $this->M_nilai_mapel->cek_nis($nis)->result();
  if ($cek != Null) {
   $nis = $this->input->post('nis');
   $nama_siswa = $this->input->post('nama_siswa');
   $nilai_pengetahuan = $this->input->post('nilai_pengetahuan');
   $nilai_keterampilan = $this->input->post('nilai_keterampilan');
   $nilai_pts = $this->input->post('nilai_pts');
   $nilai_pas = $this->input->post('nilai_pas');
   $deskripsi = $this->input->post('deskripsi');
   $mapel = $this->session->userdata('mapel');
   $id_guru = $this->session->userdata('id_guru');
   $waktu =  date('Y-m-d h:i:s');

   $data = array(
    'nis' => $nis,
    'nama_siswa' => $nama_siswa,
    'nilai_pengetahuan' => $nilai_pengetahuan,
    'nilai_keterampilan' => $nilai_keterampilan,
    'nilai_pts' => $nilai_pts,
    'nilai_pas' => $nilai_pas,
    'deskripsi' => $deskripsi,
    'mapel' => $mapel,
    'id_guru' => $id_guru,
    'waktu' => $waktu
  );
   $where =  array(
    'nis' => $nis
  );

   $this->M_nilai_mapel->update_data($where,$data, 'tabel_nilai_mapel');
   echo $this->session->set_flashdata('msg', 'success');
   redirect('Homepage/Nilai_mapel');
 }else{
   $nis = $this->input->post('nis');
   $nama_siswa = $this->input->post('nama_siswa');
   $nilai_pengetahuan = $this->input->post('nilai_pengetahuan');
   $nilai_keterampilan = $this->input->post('nilai_keterampilan');
   $nilai_pts = $this->input->post('nilai_pts');
   $nilai_pas = $this->input->post('nilai_pas');
   $deskripsi = $this->input->post('deskripsi');
   $mapel = 'IPA';
   $id_guru = '1';
   $waktu =  date('Y-m-d h:i:s');

   $data = array(
    'nis' => $nis,
    'nama_siswa' => $nama_siswa,
    'nilai_pengetahuan' => $nilai_pengetahuan,
    'nilai_keterampilan' => $nilai_keterampilan,
    'nilai_pts' => $nilai_pts,
    'nilai_pas' => $nilai_pas,
    'deskripsi' => $deskripsi,
    'mapel' => $mapel,
    'id_guru' => $id_guru,
    'waktu' => $waktu
  );

   $this->M_nilai_mapel->input_data($data, 'tabel_nilai_mapel');
   echo $this->session->set_flashdata('msg', 'success');
   redirect('Homepage/Nilai_mapel');
 }

}


}