<?php defined('BASEPATH') or exit('No direct script access allowed');

class Data  extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->helper('url');
        // $this->load->model('M_user');
    $this->load->model('M_data_sekolah');
        // $this->load->model('M_guru');
    $this->title = "Data Sekolah | SMK BANI USMAN MANUNGGAL";
    if ($this->session->userdata('masuk') != TRUE) {
      $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
      $url = base_url('Login');
      redirect($url);
    }


  }

  public function index()
  {

    $data['title'] = $this->title;
    $data['button'] = 'Siswa';
    $data['table'] = 'Informasi Data Siswa';
    $data['siswa'] = $this->M_siswa->tampil_data();
    $this->load->view('Homepage/List.siswa.php',$data);
  }

  public function sekolah()
  {

    $data['title'] = $this->title;
    $data['button'] = 'Sekolah';
    $data['table'] = 'Informasi Data Sekolah';
    $data['sekolah'] = $this->M_data_sekolah->tampil_data();
    $this->load->view('Homepage/List.data.sekolah.php',$data);
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
    $nama_siswa = $this->input->post('nama_siswa');
    $kelas = $this->input->post('kelas');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $jenis_pendaftaran = $this->input->post('jenis_pendaftaran');
    $penerimaan_data = $this->input->post('penerimaan_data');

    $nis = $this->input->post('nis');
    $nisn = $this->input->post('nisn');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $agama = $this->input->post('agama');

    $status_keluarga = $this->input->post('status_keluarga');
    $anak_ke = $this->input->post('anak_ke');
    $alamat = $this->input->post('alamat');
    $telepon = $this->input->post('telepon');
    $nama_ayah = $this->input->post('nama_ayah');

    $nama_ibu = $this->input->post('nama_ibu');
    $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
    $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
    $nama_wali = $this->input->post('nama_wali');
    $pekerjaan_wali = $this->input->post('pekerjaan_wali');

    $date = new DateTime($tanggal_lahir);

    $format_password = $date->format('dmY');

    $username = $nis;
    $password = md5($format_password);

    $dibuat_oleh = 'admin';
    $hak_akses = 'siswa';
    $waktu =  date('Y-m-d h:i:s');

    $data = array(
      'nama_siswa' => $nama_siswa,
      'kelas' => $kelas,
      'jenis_kelamin' => $jenis_kelamin,
      'jenis_pendaftaran' => $jenis_pendaftaran,
      'penerimaan_data' => $penerimaan_data,

      'nis' => $nis,
      'nisn' => $nisn,
      'tempat_lahir' => $tempat_lahir,
      'tanggal_lahir' => $tanggal_lahir,
      'agama' => $agama,

      'status_keluarga' => $status_keluarga,
      'anak_ke' => $anak_ke,
      'alamat' => $alamat,
      'telepon' => $telepon,
      'nama_ayah' => $nama_ayah,

      'nama_ibu' => $nama_ibu,
      'pekerjaan_ayah' => $pekerjaan_ayah,
      'pekerjaan_ibu' => $pekerjaan_ibu,
      'nama_wali' => $nama_wali,
      'pekerjaan_wali' => $pekerjaan_wali,

      'username' => $username,
      'password' => $password,
      'hak_akses' => $hak_akses,
      'dibuat_oleh' => $dibuat_oleh,

      'waktu' => $waktu
    );

    $this->M_siswa->input_data($data, 'tabel_siswa');
    echo $this->session->set_flashdata('msg', 'success');
    redirect('Homepage/Siswa');

  }

  public function sekolah_update(){
   date_default_timezone_set("Asia/Jakarta");
   $id_data_sekolah = $this->input->post('id_data_sekolah'); 
   $npsn = $this->input->post('npsn');
   $nss = $this->input->post('nss');
   $nama_sekolah = $this->input->post('nama_sekolah');
   $alamat = $this->input->post('alamat');

   $kelurahan = $this->input->post('kelurahan');
   $kecamatan = $this->input->post('kecamatan');
   $kota = $this->input->post('kota');
   $provinsi = $this->input->post('provinsi');
   $website = $this->input->post('website');

   $email = $this->input->post('email');
   $nip_kepsek = $this->input->post('nip_kepsek');
   $kepala_sekolah = $this->input->post('kepala_sekolah');

   $dibuat_oleh = 'admin';
   $waktu =  date('Y-m-d h:i:s');

   $data = array(
    'npsn' => $npsn,
    'nss' => $nss,
    'nama_sekolah' => $nama_sekolah,
    'alamat' => $alamat,
    'kelurahan' => $kelurahan,

    'kecamatan' => $kecamatan,
    'kota' => $kota,
    'provinsi' => $provinsi,
    'website' => $website,
    'email' => $email,

    'kepala_sekolah' => $kepala_sekolah,
    'nip_kepsek' => $nip_kepsek,
    'dibuat_oleh' => $dibuat_oleh,

    'waktu' => $waktu
  );

   $where =  array(
    'id_data_sekolah' => $id_data_sekolah
  );

   $this->M_data_sekolah->update_data($where,$data, 'tabel_data_sekolah');
   echo $this->session->set_flashdata('msg', 'success_update');
   redirect('Homepage/Data/Sekolah');

 }

 public function delete($id_siswa)
 {
  $id_siswa = $this->input->post('id_siswa');
  $this->M_siswa->delete_data($id_siswa);
  echo $this->session->set_flashdata('msg', 'success_hapus');
  redirect('Homepage/Siswa');
}



}