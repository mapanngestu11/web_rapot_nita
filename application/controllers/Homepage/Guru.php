<?php defined('BASEPATH') or exit('No direct script access allowed');

class Guru  extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('M_mapel');
    $this->load->model('M_guru');
        // $this->load->model('M_guru');
    $this->title = "Data Guru | SMK BANI USMAN MANUNGGAL";
    if ($this->session->userdata('masuk') != TRUE) {
      $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
      $url = base_url('Login');
      redirect($url);
    }


  }

  public function index()
  {

    $data['title'] = $this->title;
    $data['button'] = 'Guru';
    $data['table'] = 'Informasi Data Guru';
    $data['data_guru'] = $this->M_guru->tampil_data();
    $data['data_mapel'] = $this->M_mapel->tampil_data();
    $this->load->view('Homepage/List.guru.php',$data);
  }

  public function add()
  {
    date_default_timezone_set("Asia/Jakarta");
    $nama_guru = $this->input->post('nama_guru');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir = $this->input->post('tanggal_lahir');

    $alamat = $this->input->post('alamat');
    $telepon = $this->input->post('telepon');
    $mapel = $this->input->post('mapel');

    $input_password = $this->input->post('password');
    $username = $this->input->post('username');
    $password = md5($input_password);
    $dibuat_oleh = 'admin';
    $hak_akses = $this->input->post('hak_akses');
    $waktu =  date('Y-m-d h:i:s');

    $data = array(
      'nama_guru' => $nama_guru,
      'jenis_kelamin' => $jenis_kelamin,
      'tempat_lahir' => $tempat_lahir,
      'tanggal_lahir' => $tanggal_lahir,

      'alamat' => $alamat,
      'telepon' => $telepon,
      'mapel' => $mapel,

      'username' => $username,
      'password' => $password,
      'hak_akses' => $hak_akses,
      'dibuat_oleh' => $dibuat_oleh,

      'waktu' => $waktu
    );

    $this->M_guru->input_data($data, 'tabel_guru');
    echo $this->session->set_flashdata('msg', 'success');
    redirect('Homepage/Guru');

  }

  public function update(){
   date_default_timezone_set("Asia/Jakarta");
   $id_guru = $this->input->post('id_guru');
   date_default_timezone_set("Asia/Jakarta");
   $nama_guru = $this->input->post('nama_guru');
   $jenis_kelamin = $this->input->post('jenis_kelamin');
   $tempat_lahir = $this->input->post('tempat_lahir');
   $tanggal_lahir = $this->input->post('tanggal_lahir');

   $alamat = $this->input->post('alamat');
   $telepon = $this->input->post('telepon');
   $mapel = $this->input->post('mapel');

   $input_password = $this->input->post('password');
   $username = $this->input->post('username');
   $password = md5($input_password);
   $dibuat_oleh = 'admin';
   $hak_akses = $this->input->post('hak_akses');
   $waktu =  date('Y-m-d h:i:s');

   $data = array(
    'nama_guru' => $nama_guru,
    'jenis_kelamin' => $jenis_kelamin,
    'tempat_lahir' => $tempat_lahir,
    'tanggal_lahir' => $tanggal_lahir,

    'alamat' => $alamat,
    'telepon' => $telepon,
    'mapel' => $mapel,

    'username' => $username,
    'password' => $password,
    'hak_akses' => $hak_akses,
    'dibuat_oleh' => $dibuat_oleh,

    'waktu' => $waktu
  );

   $where =  array(
    'id_guru' => $id_guru
  );

   $this->M_guru->update_data($where,$data, 'tabel_guru');
   echo $this->session->set_flashdata('msg', 'success_update');
   redirect('Homepage/Guru');

 }

 public function delete($id_guru)
 {
  $id_guru = $this->input->post('id_guru');
  $this->M_guru->delete_data($id_guru);
  echo $this->session->set_flashdata('msg', 'success_hapus');
  redirect('Homepage/Guru');
}



}