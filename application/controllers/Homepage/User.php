<?php defined('BASEPATH') or exit('No direct script access allowed');

class User  extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('M_user');
    $this->title = "Data User | SMK BANI USMAN MANUNGGAL";
    if ($this->session->userdata('masuk') != TRUE) {
      $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
      $url = base_url('Login');
      redirect($url);
    }

    
  }

  public function index()
  {

    $data['title'] = $this->title;
    $data['button'] = 'User';
    $data['table'] = 'Informasi Data User';
    $data['data_user'] = $this->M_user->tampil_data();

    $this->load->view('Homepage/List.user.php',$data);
  }

  public function add()
  {
    date_default_timezone_set("Asia/Jakarta");
    $nama_lengkap = $this->input->post('nama_lengkap');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $hak_akses = 'admin';


    $data = array(
      'nama_lengkap' => $nama_lengkap,
      'username' => $username,
      'password' => $password,
      'hak_akses' => $hak_akses
      
    );

    $this->M_user->input_data($data, 'tabel_user');
    echo $this->session->set_flashdata('msg', 'success');
    redirect('Homepage/User');

  }

  public function update(){
   date_default_timezone_set("Asia/Jakarta");
   $id_user = $this->input->post('id_user');
   $nama_lengkap = $this->input->post('nama_lengkap');
   $username = $this->input->post('username');
   $password = md5($this->input->post('password'));
   $hak_akses = 'admin';


   $data = array(
    'nama_lengkap' => $nama_lengkap,
    'username' => $username,
    'password' => $password,
    'hak_akses' => $hak_akses
  );

   $where =  array(
    'id_user' => $id_user
  );

   $this->M_user->update_data($where,$data, 'tabel_user');
   echo $this->session->set_flashdata('msg', 'success_update');
   redirect('Homepage/User');

 }

 public function delete($id_user)
 {
  $id_user = $this->input->post('id_user');
  $this->M_user->delete_data($id_user);
  echo $this->session->set_flashdata('msg', 'success_hapus');
  redirect('Homepage/Kelas');
}



}