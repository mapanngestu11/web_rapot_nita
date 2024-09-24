<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kelas  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('M_guru');
        $this->load->model('M_kelas');
        $this->load->model('M_tahun_pelajaran');
        $this->title = "Data Kelas | SMK BANI USMAN MANUNGGAL";
        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('Login');
            redirect($url);
        }

        
    }

    public function index()
    {

        $data['title'] = $this->title;
        $data['button'] = 'Kelas';
        $data['table'] = 'Informasi Data Kelas';
        $data['kelas'] = $this->M_kelas->tampil_data();
        $data['tapel'] = $this->M_tahun_pelajaran->tampil_data();
        $data['guru'] = $this->M_guru->tampil_data();
        $this->load->view('Homepage/List.kelas.php',$data);
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
        $tingkatan = $this->input->post('tingkatan');
        $walas = $this->input->post('walas');
        $tahun_pelajaran = $this->input->post('tahun_pelajaran');
        $dibuat_oleh = 'admin';
        $waktu =  date('Y-m-d h:i:s');

        $data = array(
            'nama_kelas' => $nama_kelas,
            'tingkatan' => $tingkatan,
            'walas' => $walas,
            'tahun_pelajaran' => $tahun_pelajaran,
            'dibuat_oleh' => $dibuat_oleh,
            'waktu' => $waktu
        );

        $this->M_kelas->input_data($data, 'tabel_kelas');
        echo $this->session->set_flashdata('msg', 'success');
        redirect('Homepage/Kelas');

    }

    public function update(){
       date_default_timezone_set("Asia/Jakarta");
       $id_kelas = $this->input->post('id_kelas');
       $nama_kelas = $this->input->post('nama_kelas');
       $tingkatan = $this->input->post('tingkatan');
       $walas = $this->input->post('walas');
       $tahun_pelajaran = $this->input->post('tahun_pelajaran');
       $dibuat_oleh = 'admin';
       $waktu =  date('Y-m-d h:i:s');


       $data = array(
        'nama_kelas' => $nama_kelas,
        'tingkatan' => $tingkatan,
        'walas' => $walas,
        'tahun_pelajaran' => $tahun_pelajaran,
        'dibuat_oleh' => $dibuat_oleh,
        'waktu' => $waktu
    );

       $where =  array(
        'id_kelas' => $id_kelas
    );

       $this->M_kelas->update_data($where,$data, 'tabel_kelas');
       echo $this->session->set_flashdata('msg', 'success_update');
       redirect('Homepage/Kelas');

   }

   public function delete($id_kelas)
   {
    $id_kelas = $this->input->post('id_kelas');
    $this->M_kelas->delete_data($id_kelas);
    echo $this->session->set_flashdata('msg', 'success_hapus');
    redirect('Homepage/Kelas');
}



}