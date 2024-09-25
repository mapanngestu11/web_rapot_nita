<?php defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_spiritual  extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->helper('url');
        // $this->load->model('M_user');
    $this->load->model('M_kelas');
    $this->load->model('M_nilai_spiritual');
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
    $data['button'] = 'Data Nilai Spiritual';
    $data['table'] = 'Informasi Data Nilai Spiritual';
    $data['data_kelas'] = $this->M_kelas->tampil_data_siswa();
    $this->load->view('Homepage/List.input.nilai.spiritual.php',$data);
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
   $data['button'] = 'Data Nilai Spiritual';
   $data['table'] = 'Informasi Data Nilai Spiritual';
   $mapel = NULL;
   $data['data_kelas'] = $this->M_kelas->tampil_data_nilai_spiritual_siswa_byclass($nama_kelas);

   $this->load->view('Homepage/List.input.nilai.spiritual.add.php',$data);
 }

 public function update()
 {
   date_default_timezone_set("Asia/Jakarta");
   $nis = $this->input->post('nis');
  // $nis = '7';
   $cek = $this->M_nilai_spiritual->cek_nis($nis)->result();
   if ($cek != Null) {
     $nis = $this->input->post('nis');
     $nama_siswa = $this->input->post('nama_siswa');
     $predikat = $this->input->post('predikat');
     $deskripsi = $this->input->post('deskripsi');
     $id_guru = '1';
     $waktu =  date('Y-m-d h:i:s');

     $data = array(
      'nis' => $nis,
      'nama_siswa' => $nama_siswa,
      'deskripsi' => $deskripsi,
      'predikat' => $predikat,
      'id_guru' => $id_guru,
      'waktu' => $waktu
    );
     $where =  array(
      'nis' => $nis
    );

     $this->M_nilai_spiritual->update_data($where,$data, 'tabel_nilai_spiritual');
     echo $this->session->set_flashdata('msg', 'success');
     redirect('Homepage/Nilai_spiritual');
   }else{
    $nis = $this->input->post('nis');
    $nama_siswa = $this->input->post('nama_siswa');
    $deskripsi = $this->input->post('deskripsi');
    $predikat = $this->input->post('predikat');
    $id_guru = '1';
    $waktu =  date('Y-m-d h:i:s');

    $data = array(
      'nis' => $nis,
      'nama_siswa' => $nama_siswa,
      'predikat' => $predikat,
      'deskripsi' => $deskripsi,
      
      'id_guru' => $id_guru,
      'waktu' => $waktu
    );

    $this->M_nilai_spiritual->input_data($data, 'tabel_nilai_spiritual');
    echo $this->session->set_flashdata('msg', 'success');
    redirect('Homepage/Nilai_spiritual');
  }

}


}