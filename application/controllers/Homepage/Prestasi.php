<?php defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi  extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->helper('url');
        // $this->load->model('M_user');
    $this->load->model('M_kelas');
    $this->load->model('M_nilai_prestasi');
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
    $data['button'] = 'Data Nilai Prestasi';
    $data['table'] = 'Informasi Data Prestasi';
    $data['data_kelas'] = $this->M_kelas->tampil_data_siswa();
    $this->load->view('Homepage/List.input.nilai.prestasi.php',$data);
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
   $data['button'] = 'Data Nilai Prestasi';
   $data['table'] = 'Informasi Data Prestasi';
   $mapel = NULL;
   $data['data_kelas'] = $this->M_kelas->tampil_data_nilai_prestasi_siswa_byclass($nama_kelas);

   $this->load->view('Homepage/List.input.nilai.prestasi.add.php',$data);
 }

 public function update()
 {
   date_default_timezone_set("Asia/Jakarta");
   $nis = $this->input->post('nis');
  // $nis = '7';
   $cek = $this->M_nilai_prestasi->cek_nis($nis)->result();
   if ($cek != Null) {
     $nis = $this->input->post('nis');
     $nama_siswa = $this->input->post('nama_siswa');
     $jenis_prestasi = $this->input->post('jenis_prestasi');
     $keterangan = $this->input->post('keterangan');

     $data = array(
      'nis' => $nis,
      'nama_siswa' => $nama_siswa,
      'jenis_prestasi' => $jenis_prestasi,
      'keterangan' => $keterangan

    );
     $where =  array(
      'nis' => $nis
    );

     $this->M_nilai_prestasi->update_data($where,$data, 'tabel_prestasi');
     echo $this->session->set_flashdata('msg', 'success');
     redirect('Homepage/Nilai_sosial');
   }else{
    $nis = $this->input->post('nis');
    $nama_siswa = $this->input->post('nama_siswa');
    $jenis_prestasi = $this->input->post('jenis_prestasi');
    $keterangan = $this->input->post('keterangan');


    $data = array(
      'nis' => $nis,
      'nama_siswa' => $nama_siswa,
      'jenis_prestasi' => $jenis_prestasi,
      'keterangan' => $keterangan

    );

    $this->M_nilai_prestasi->input_data($data, 'tabel_prestasi');
    echo $this->session->set_flashdata('msg', 'success');
    redirect('Homepage/Nilai_sosial');
  }

}


}