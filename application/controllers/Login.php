<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login  extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('M_user');
    // $this->load->model('M_siswa');
    $this->load->model('M_guru');



  }

  public function index()
  {
    $this->load->view('Login.php');
  }

  public function auth()
  {


    $username = strip_tags(str_replace("'", "", $this->input->post('username')));
    $password = strip_tags(str_replace("'", "", $this->input->post('password')));

    $u = $username;
    $p = $password;

    $cek_user = $this->M_user->cek_user($u, $p);
    $cek_siswa = NULL;
    $cek_guru = $this->M_guru->cek_guru($u, $p);




    if ($cek_user->num_rows() > 0) {
      $this->session->set_userdata('masuk', true);
      $this->session->set_userdata('user', $u);
      $data_admin = $cek_user->row_array();

      $id = $data_admin['id_user'];
      $nama_lengkap = $data_admin['nama_lengkap'];
      $hak_akses = $data_admin['hak_akses'];

      $this->session->set_userdata('id_user', $id);
      $this->session->set_userdata('nama_lengkap', $nama_lengkap);
      $this->session->set_userdata('hak_akses', $hak_akses);
      $data = array(
        'hak_akses'     => $hak_akses,
        'id_user'     => $id,
        'nama_lengkap'     => $nama_lengkap,
        'tittle' => 'Admin Sekolah',
        'logged_in' => TRUE

      );

      redirect('Homepage/Dashboard/', $data);



    }elseif ($cek_guru->num_rows() > 0) {
      $this->session->set_userdata('masuk', true);
      $this->session->set_userdata('user', $u);
      $data_admin = $cek_guru->row_array();

      $id = $data_admin['id_guru'];
      $nama_lengkap = $data_admin['nama_guru'];
      $hak_akses = $data_admin['hak_akses'];

      $this->session->set_userdata('id_guru', $id);
      $this->session->set_userdata('nama_guru', $nama_lengkap);
      $this->session->set_userdata('hak_akses', $hak_akses);
      $data = array(
        'hak_akses'     => $hak_akses,
        'id_guru'     => $id,
        'nama_guru'     => $nama_lengkap,
        'tittle' => 'Guru',
        'logged_in' => TRUE

      );

      redirect('Homepage/Dashboard/', $data);
    }elseif ($cek_siswa->num_rows() > 0) {
      var_dump("Guru");
    }else{
      var_dump("data tidak ditemukan");
    }

    die();
    json_encode($cadmin);        



    if ($cadmin->num_rows() > 0) {

      $this->session->set_userdata('masuk', true);
      $this->session->set_userdata('user', $u);
      $xcadmin = $cadmin->row_array();

      if ($xcadmin['hak_akses'] == 'admin') {
        $this->session->set_userdata('akses', 'admin');
        $id = $xcadmin['id'];
        $nama_lengkap = $xcadmin['nama_lengkap'];
        $hak_akses = $xcadmin['hak_akses'];
        $this->session->set_userdata('id', $id);
        $this->session->set_userdata('nama_lengkap', $nama_lengkap);
        $this->session->set_userdata('hak_akses', $hak_akses);
        $data = array(
          'hak_akses'     => $hak_akses,
          'id'     => $id,
          'nama_lengkap'     => $nama_lengkap,
          'logged_in' => TRUE
        );
        redirect('admin/Homepage', $data);
      } elseif ($xcadmin['hak_akses'] == 'tu') {
        $this->session->set_userdata('akses', 'tu');
        $id = $xcadmin['id'];
        $nama_lengkap = $xcadmin['nama_lengkap'];
        $hak_akses = $xcadmin['hak_akses'];
        $this->session->set_userdata('id', $id);
        $this->session->set_userdata('nama_lengkap', $nama_lengkap);
        $this->session->set_userdata('hak_akses', $hak_akses);
        $data = array(
          'hak_akses'     => $hak_akses,
          'nama_lengkap'     => $nama_lengkap,
          'logged_in' => TRUE
        );

        redirect('admin/Homepage', $data);
      }elseif ($xcadmin['hak_akses'] == 'guru') {
       $this->session->set_userdata('akses', 'admin');
       $id = $xcadmin['id'];
       $nama_lengkap = $xcadmin['nama_lengkap'];
       $hak_akses = $xcadmin['hak_akses'];
       $this->session->set_userdata('id', $id);
       $this->session->set_userdata('nama_lengkap', $nama_lengkap);
       $this->session->set_userdata('hak_akses', $hak_akses);
       $data = array(
        'hak_akses'     => $hak_akses,
        'id'     => $id,
        'nama_lengkap'     => $nama_lengkap,
        'logged_in' => TRUE
      );
       redirect('admin/Homepage', $data);
     }
   } else {

    $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert" style="color:white">Username Atau Password Salah !</div>');
    redirect('Login');
  }
}

public function logout()
{
           // Lakukan proses logout di sini
  $this->session->sess_destroy();

        // Redirect ke halaman setelah logout berhasil
  redirect('Login');
}

}
