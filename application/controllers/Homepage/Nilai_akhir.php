<?php defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_akhir  extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->helper('url');
        // $this->load->model('M_user');
    $this->load->model('M_kelas');
    $this->load->model('M_siswa');
    $this->load->model('M_kehadiran');
    $this->load->model('M_nilai_akhir');
    $this->title = "Data Kehadiran | SMK BANI USMAN MANUNGGAL";
    if ($this->session->userdata('masuk') != TRUE) {
      $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
      $url = base_url('Login');
      redirect($url);
    }
    
  }

  public function index()
  {

    $data['title'] = $this->title;
    $data['button'] = 'Data Nilai Akhir Siswa';
    $data['table'] = 'Informasi Nilai siswa';
    $data['data_kelas'] = $this->M_kelas->tampil_data_siswa();
    $this->load->view('Homepage/List.nilai.akhir.php',$data);
  }


  public function Listcheck($nama_kelas)
  {
   $data['title'] = $this->title;
   $data['button'] = 'Data Nilai';
   $data['table'] = 'Informasi Nilai Akhir siswa';
   $mapel = NULL;
   $data['data_kelas'] = $this->M_kelas->tampil_data_kehdairan_byclass($nama_kelas);
   $this->load->view('Homepage/List.nilai.akhir.add.php',$data);
 }

 public function cetak($nis)
 {
  $data['data_siswa'] = $this->M_nilai_akhir->get_datasiswa_bynis($nis);
  $data['data_nilai_mapel'] = $this->M_nilai_akhir->get_datamapel_bynis($nis);
  $data['data_nilai_sosial'] = $this->M_nilai_akhir->get_datasosial_bynis($nis);
  $data['data_nilai_spiritual'] = $this->M_nilai_akhir->get_dataspiritual_bynis($nis);
  $data['data_kehadiran'] = $this->M_nilai_akhir->get_datakehadiran_bynis($nis);
  $data['data_walas'] = $this->M_nilai_akhir->get_walas($nis);

  $this->load->view('Homepage/Cetak_rapot',$data);
}




}