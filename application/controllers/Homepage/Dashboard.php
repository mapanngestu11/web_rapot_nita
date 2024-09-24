<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        // $this->load->model('M_user');
        // $this->load->model('M_siswa');
        // $this->load->model('M_guru');
        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('Login');
            redirect($url);
        }

        
    }

    public function index()
    {

        $this->load->view('Homepage/List.index.php');
    }

}