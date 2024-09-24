<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mapel  extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->helper('url');
        // $this->load->model('M_user');
    $this->load->model('M_mapel');
        // $this->load->model('M_guru');
    $this->title = "Data Mata Pelajaran | SMK BANI USMAN MANUNGGAL";
    if ($this->session->userdata('masuk') != TRUE) {
      $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
      $url = base_url('Login');
      redirect($url);
    }


  }

  public function index()
  {

    $data['title'] = $this->title;
    $data['button'] = 'Mata Pelajaran';
    $data['table'] = 'Informasi Data Mata pelajaran';
    $data['mapel'] = $this->M_mapel->tampil_data();
    $this->load->view('Homepage/List.mapel.php',$data);
  }


  public function rapot()
  {

    $data['title'] = $this->title;
    $data['table'] = 'Informasi Data Rapot Siswa';
    $this->load->view('Homepage/List.rapot.php',$data);
  }

  public function add()
  {
    date_default_timezone_set("Asia/Jakarta");
    $nama_mapel = $this->input->post('nama_mapel');
    $singkatan = $this->input->post('singkatan');

    $dibuat_oleh = 'admin';
    $waktu =  date('Y-m-d h:i:s');

    $data = array(
      'nama_mapel' => $nama_mapel,
      'singkatan' => $singkatan,
      'dibuat_oleh' => $dibuat_oleh,

      'waktu' => $waktu
    );

    $this->M_mapel->input_data($data, 'tabel_mapel');
    echo $this->session->set_flashdata('msg', 'success');
    redirect('Homepage/Mapel');

  }

  public function update(){
   date_default_timezone_set("Asia/Jakarta");
   $id_mapel = $this->input->post('id_mapel');
   $nama_mapel = $this->input->post('nama_mapel');
   $singkatan = $this->input->post('singkatan');
   $dibuat_oleh = 'admin';
   $waktu =  date('Y-m-d h:i:s');

   $data = array(
    'nama_mapel' => $nama_mapel,
    'singkatan' => $singkatan,
    'dibuat_oleh' => $dibuat_oleh,

    'waktu' => $waktu
  );

   $where =  array(
    'id_mapel' => $id_mapel
  );

   $this->M_mapel->update_data($where,$data, 'tabel_mapel');
   echo $this->session->set_flashdata('msg', 'success_update');
   redirect('Homepage/Mapel');

 }

 public function delete($id_mapel)
 {
  $id_mapel = $this->input->post('id_mapel');
  $this->M_mapel->delete_data($id_mapel);
  echo $this->session->set_flashdata('msg', 'success_hapus');
  redirect('Homepage/Mapel');
}



}