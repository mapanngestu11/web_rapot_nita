<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kehadiran  extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->helper('url');
        // $this->load->model('M_user');
    $this->load->model('M_kelas');
    $this->load->model('M_kehadiran');
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
    $data['button'] = 'Data Absensi';
    $data['table'] = 'Informasi Absensi siswa';
    $data['data_kelas'] = $this->M_kelas->tampil_data_siswa();
    $this->load->view('Homepage/List.input.kehadiran.php',$data);
  }


  public function Listcheck($nama_kelas)
  {
   $data['title'] = $this->title;
   $data['button'] = 'Data Absensi';
   $data['table'] = 'Informasi Absensi siswa';
   $mapel = NULL;
   $data['data_kelas'] = $this->M_kelas->tampil_data_kehdairan_byclass($nama_kelas);

   $this->load->view('Homepage/List.input.kehadiran.add.php',$data);
 }

 public function update()
 {
   date_default_timezone_set("Asia/Jakarta");
   $nis = $this->input->post('nis');
  // $nis = '7';
   $cek = $this->M_kehadiran->cek_nis($nis)->result();
   if ($cek != Null) {
     $nis = $this->input->post('nis');
     $nama_siswa = $this->input->post('nama_siswa');
     $sakit = $this->input->post('sakit');
     $izin = $this->input->post('izin');
     $alpa = $this->input->post('alpa');
     $id_guru = '1';
     $waktu =  date('Y-m-d h:i:s');

     $data = array(
      'nis' => $nis,
      'nama_siswa' => $nama_siswa,
      'sakit' => $sakit,
      'izin' => $izin,
      'alpa' => $alpa,
      'id_guru' => $id_guru,
      'waktu' => $waktu
    );
     $where =  array(
      'nis' => $nis
    );

     $this->M_kehadiran->update_data($where,$data, 'tabel_tidak_hadir');
     echo $this->session->set_flashdata('msg', 'success');
     redirect('Homepage/Kehadiran');
   }else{
    $nis = $this->input->post('nis');
    $nama_siswa = $this->input->post('nama_siswa');
    $sakit = $this->input->post('sakit');
    $izin = $this->input->post('izin');
    $alpa = $this->input->post('alpa');
    $id_guru = '1';
    $id_guru = '1';
    $waktu =  date('Y-m-d h:i:s');

    $data = array(
      'nis' => $nis,
      'nama_siswa' => $nama_siswa,
      'sakit' => $sakit,
      'izin' => $izin,
      'alpa' => $alpa,
      'id_guru' => $id_guru,
      'waktu' => $waktu
    );

    $this->M_kehadiran->input_data($data, 'tabel_tidak_hadir');
    echo $this->session->set_flashdata('msg', 'success');
    redirect('Homepage/Kehadiran');
  }

}


}