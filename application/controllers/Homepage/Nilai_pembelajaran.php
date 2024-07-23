<?php defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_pembelajaran  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        // $this->load->model('M_user');
        $this->load->model('M_nilai_pembelajaran');
        $this->load->model('M_siswa');

        // $this->load->model('M_guru');
        $this->title = "Data Siswa | SMK BANI USMAN MANUNGGAL";

        
    }

    public function index()
    {

        $data['title'] = $this->title;
        $data['button'] = 'Data Nilai KKM';
        $data['table'] = 'Informasi Data Nilai KKM Mata Pelajaran';
        $data['nilai_pelajaran'] = $this->M_nilai_pembelajaran->tampil_data();
        $this->load->view('Homepage/List.nilaipelajaran.php',$data);
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
        $nama_kelas = $this->input->post('nama_kelas');
        $nama_guru = $this->input->post('nama_guru');
        $mapel     = $this->input->post('mapel');
        $nilai_kkm = $this->input->post('nilai_kkm');

        $dibuat_oleh = 'admin';
        $waktu =  date('Y-m-d h:i:s');

        $data = array(
            'nama_kelas' => $nama_kelas,
            'nama_guru' => $nama_guru,
            'mapel' => $mapel,
            'nilai_kkm' => $nilai_kkm,
            'dibuat_oleh' => $dibuat_oleh,
            'waktu' => $waktu
        );

        $this->M_nilai_pembelajaran->input_data($data, 'tabel_kkm');
        echo $this->session->set_flashdata('msg', 'success');
        redirect('Homepage/Nilai_pembelajaran');

    }

    public function update(){
     date_default_timezone_set("Asia/Jakarta");
     $id_kkm = $this->input->post('id_kkm');

     $nama_kelas = $this->input->post('nama_kelas');
     $nama_guru = $this->input->post('nama_guru');
     $mapel     = $this->input->post('mapel');
     $nilai_kkm = $this->input->post('nilai_kkm');

     $dibuat_oleh = 'admin';
     $waktu =  date('Y-m-d h:i:s');

     $data = array(
        'nama_kelas' => $nama_kelas,
        'nama_guru' => $nama_guru,
        'mapel' => $mapel,
        'nilai_kkm' => $nilai_kkm,
        'dibuat_oleh' => $dibuat_oleh,
        'waktu' => $waktu
    );

     $where =  array(
        'id_kkm' => $id_kkm
    );

     $this->M_nilai_pembelajaran->update_data($where,$data, 'tabel_kkm');
     echo $this->session->set_flashdata('msg', 'success_update');
     redirect('Homepage/Nilai_pembelajaran');

 }

 public function delete($id_kkm)
 {
    $id_kkm = $this->input->post('id_kkm');
    $this->M_nilai_pembelajaran->delete_data($id_kkm);
    echo $this->session->set_flashdata('msg', 'success_hapus');
    redirect('Homepage/Nilai_pembelajaran');
}

public function input_nilai_mapel()
{
 $data['title'] = $this->title;
 $data['button'] = 'Data Nilai Mata Pelajaran';
 $data['table'] = 'Informasi Data Nilai Pelajaran';
 $data['nilai_pelajaran'] = $this->M_nilai_pembelajaran->tampil_data();
 $data['siswa']     = $this->M_siswa->tampil_data();
 $this->load->view('Homepage/List.inputnilai.mapel.php',$data);
}

public function input_nilai_mapel_byId($id_kkm)
{
  $data['title'] = $this->title;
  $data['button'] = 'Data Nilai Mata Pelajaran';
  $data['table'] = 'Informasi Data Nilai Pelajaran';
  $data['nilai_pelajaran'] = $this->M_nilai_pembelajaran->tampil_data();
  $data['siswa']     = $this->M_siswa->tampil_data();
  $this->load->view('Homepage/List.inputnilai.mapel.add.php',$data);
}




}