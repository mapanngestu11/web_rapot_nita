<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        // $this->load->model('M_user');
        // $this->load->model('M_siswa');
        // $this->load->model('M_guru');
        $this->title = "Data Siswa | SMK BANI USMAN MANUNGGAL";

        
    }

    public function index()
    {

        $data['title'] = $this->title;
        $data['table'] = 'Informasi Data Siswa';
        $this->load->view('Homepage/List.siswa.php',$data);
    }


    public function rapot()
    {

        $data['title'] = $this->title;
        $data['table'] = 'Informasi Data Rapot Siswa';
        $this->load->view('Homepage/List.rapot.php',$data);
    }


}