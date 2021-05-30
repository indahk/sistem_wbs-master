<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Dashboard extends MX_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        // $this->load->model('Md_akun');
    }

    public function index()
    {
        $jml_aspirasi=$this->db->query("SELECT * FROM vw_aspirasi");
        $jml_saran=$this->db->query("SELECT * FROM vw_saran");
        $jml_lapor=$this->db->query("SELECT * FROM vw_lapor");
        $jml_permohonan=$this->db->query("SELECT * FROM vw_permintaan");
        $data['jml_aspirasi']=$jml_aspirasi->num_rows();
        $data['jml_saran']=$jml_saran->num_rows();
        $data['jml_lapor']=$jml_lapor->num_rows();
        $data['jml_permohonan']=$jml_permohonan->num_rows();
        
        
        $this->load->view('dashboard/template/include_header');
        $this->load->view('dashboard/template/include_navbar');
        $this->load->view('dashboard/template/include_sidebar');
        $this->load->view('dashboard/pages/dashboard',$data); 
        $this->load->view('dashboard/template/include_footer');

    
    }

    public function dataAspirasi()
    {
        
        //echo "Alhamdullillah Bisa";
        $this->load->view('dashboard/template/include_headerdata');
        $this->load->view('dashboard/template/include_navbar');
        $this->load->view('dashboard/template/include_sidebar');
        $this->load->view('dashboard/pages/dataAspirasi');
        $this->load->view('dashboard/template/include_footerdata');
    }


    public function dataSaran()
    {
        
        //echo "Alhamdullillah Bisa";
        $this->load->view('dashboard/template/include_headerdata');
        $this->load->view('dashboard/template/include_navbar');
        $this->load->view('dashboard/template/include_sidebar');
        $this->load->view('dashboard/pages/dataSaran');
        $this->load->view('dashboard/template/include_footerdata');
    }


    public function dataLapor()
    {
        
        //echo "Alhamdullillah Bisa";
        $this->load->view('dashboard/template/include_headerdata');
        $this->load->view('dashboard/template/include_navbar');
        $this->load->view('dashboard/template/include_sidebar');
        $this->load->view('dashboard/pages/dataLapor');
        $this->load->view('dashboard/template/include_footerdata');
    }


    public function dataPermintaan()
    {
        
        //echo "Alhamdullillah Bisa";
        $this->load->view('dashboard/template/include_headerdata');
        $this->load->view('dashboard/template/include_navbar');
        $this->load->view('dashboard/template/include_sidebar');
        $this->load->view('dashboard/pages/dataPermintaan');
        $this->load->view('dashboard/template/include_footerdata');
    }


    public function forgot(){
        //$this->load->view("forgot-password");
    }
        
    
}