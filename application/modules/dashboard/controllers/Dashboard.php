<?php
(defined('BASEPATH')) or exit('No direct script access allowed');

class Dashboard extends MX_Controller
{

    public function __construct()
    {


        parent::__construct();
        $autoload = array(
            'helper'    => array('url', 'form','MY_helper'),
            'libraries' => array('email'),
        );
        // $this->load->library('session');
        // $this->load->library('form_validation');
        // $this->load->helper('MY');
        // $this->load->model('Md_akun');
    }

    public function index()
    {
        // $page_data['page_name'] = 'pengguna';
        // $page_data['page_title'] = '';
        // $page_data['page_desc'] = '';

        // $jml_aspirasi = $this->db->query("SELECT * FROM vw_aspirasi");
        // $jml_saran = $this->db->query("SELECT * FROM vw_saran");
        // $jml_lapor = $this->db->query("SELECT * FROM vw_lapor");
        // $jml_permohonan = $this->db->query("SELECT * FROM vw_permintaan");

        // $data['jml_aspirasi'] = $jml_aspirasi->num_rows();
        // $data['jml_saran'] = $jml_saran->num_rows();
        // $data['jml_lapor'] = $jml_lapor->num_rows();
        // $data['jml_permohonan'] = $jml_permohonan->num_rows();
        // $data['title'] = 'Dasboard';

       
        $this->load->view('dashboard/index');
        $this->load->view('dashboard/pages/dashboard');
        
    }

    public function getAspirasi()
    {
        modules::run('Aspirasi');

        // $data['title'] = 'Data Aspirasi';

        // modules::load('Aspirasi');
        // $data=$this->Aspirasi->getAspirasi();
        // //echo "Alhamdullillah Bisa";
        // $this->load->view('dashboard/template/include_header',$data);
        // $this->load->view('dashboard/template/include_navbar');
        // $this->load->view('dashboard/template/include_sidebar');
        // $this->load->view('dashboard/pages/dataAspirasi',$data);
        // $this->load->view('dashboard/template/include_footerdata');
    }


    public function dataSaran()
    {
        $data['title'] = 'Data Saran';
        //echo "Alhamdullillah Bisa";
        $this->load->view('dashboard/template/include_header', $data);
        $this->load->view('dashboard/template/include_navbar');
        $this->load->view('dashboard/template/include_sidebar');
        $this->load->view('dashboard/pages/dataSaran');
        $this->load->view('dashboard/template/include_footerdata');
    }


    public function dataLapor()
    {

        $data['title'] = 'Data Laporan Pelanggaran';
        //echo "Alhamdullillah Bisa";
        $this->load->view('dashboard/template/include_header', $data);
        $this->load->view('dashboard/template/include_navbar');
        $this->load->view('dashboard/template/include_sidebar');
        $this->load->view('dashboard/pages/dataLapor');
        $this->load->view('dashboard/template/include_footerdata');
    }


    public function dataPermintaan()
    {

        $data['title'] = 'Data Permintaan Informasi';
        //echo "Alhamdullillah Bisa";
        $this->load->view('dashboard/template/include_header', $data);
        $this->load->view('dashboard/template/include_navbar');
        $this->load->view('dashboard/template/include_sidebar');
        $this->load->view('dashboard/pages/dataPermintaan');
        $this->load->view('dashboard/template/include_footerdata');
    }

    public function showAspirasi()
    {
        $data['title'] = 'Detail Aspirasi';

        // modules::load('dashboard');
        $this->load->view('dashboard/template/include_header', $data);
        $this->load->view('dashboard/template/include_navbar');
        $this->load->view('dashboard/template/include_sidebar');
        $this->load->view('dashboard/pages/detailAspirasi');
        $this->load->view('dashboard/template/include_footer');
    }


    public function forgot()
    {
        //$this->load->view("forgot-password");
    }
}
