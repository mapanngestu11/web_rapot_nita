<?php defined('BASEPATH') or exit('No direct script access allowed');

class Tapel  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        // $this->load->model('M_user');
        $this->load->model('M_tahun_pelajaran');
        // $this->load->model('M_guru');
        $this->title = "Data Tahun Pelajaran | SMK BANI USMAN MANUNGGAL";
        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('Login');
            redirect($url);
        }

        
    }

    public function index()
    {

        $data['title'] = $this->title;
        $data['button'] = 'Tahun Pelajaran';
        $data['table'] = 'Informasi Data Tahun Pelajaran';
        $data['tapel'] = $this->M_tahun_pelajaran->tampil_data();
        $this->load->view('Homepage/List.tapel.php',$data);
    }


    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $tahun_pelajaran = $this->input->post('tahun_pelajaran');
        $semester = $this->input->post('semester');
        $dibuat_oleh = 'admin';
        $waktu =  date('Y-m-d h:i:s');

        $data = array(
            'tahun_pelajaran' => $tahun_pelajaran,
            'semester' => $semester,
            'dibuat_oleh' => $dibuat_oleh,
            'waktu' => $waktu
        );

        $this->M_tahun_pelajaran->input_data($data, 'tabel_tahun_pelajaran');
        echo $this->session->set_flashdata('msg', 'success');
        redirect('Homepage/Tapel');

    }

    public function update(){
     date_default_timezone_set("Asia/Jakarta");
     $id_tapel = $this->input->post('id_tapel');
     $tahun_pelajaran = $this->input->post('tahun_pelajaran');
     $semester = $this->input->post('semester');
     $dibuat_oleh = 'admin';
     $waktu =  date('Y-m-d h:i:s');


     $data = array(
        'tahun_pelajaran' => $tahun_pelajaran,
        'semester' => $semester,
        'dibuat_oleh' => $dibuat_oleh,
        'waktu' => $waktu
    );

     $where =  array(
        'id_tapel' => $id_tapel
    );

     $this->M_tahun_pelajaran->update_data($where,$data, 'tabel_tahun_pelajaran');
     echo $this->session->set_flashdata('msg', 'success_update');
     redirect('Homepage/Tapel');

 }

 public function delete($id_tapel)
 {
    $id_tapel = $this->input->post('id_tapel');
    $this->M_tahun_pelajaran->delete_data($id_tapel);
    echo $this->session->set_flashdata('msg', 'success_hapus');
    redirect('Homepage/Tapel');
}



}