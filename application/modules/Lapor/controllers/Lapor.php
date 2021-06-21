<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Lapor extends MX_Controller
{
    function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_lapor');
	}

	public function index()
	{    
        // $data['jml_lapor']=$jml_lapor->num_rows();
        //	$this->load->view('templates/header');
        //	$this->load->view('templates/hero_section');
        //	$this->load->view('pages/aspirasi');
        //	$this->load->view('templates/footer');
        //  echo 'Hai ini adalah halaman aspirasi';
        modules::load('Beranda');
		$data=modules::run('Kategori_masukan/getAll');
		
		$this->load->view('Beranda/template/header');
		$this->load->view('Beranda/template/hero_section');
		$this->load->view('Beranda/form/form_lapor',$data);
		$this->load->view('Beranda/template/footer');
        
	}

	public function addLapor(){
		$this->Md_lapor->addLapor();
        $this->session->set_flashdata('message', '<div class="alert alert-success">Pelaporan berhasil dikirimkan!</div>');
        redirect('/Lapor/showLapor');
	}

    public function deleteLapor(){
		$this->Md_lapor->deleteLapor();

		$id             = $this->input->post('id_lapor');
        $where    = array('id_lapor' => $id);
        $this->Md_lapor->deleteLapor($where, 'tb_lapor', $id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus!</div>');
        redirect('/Lapor/showLapor');
    }

    public function showLapor(){
		$this->Md_lapor->allLapor();

    }

    public function getLapor(){
        
    }

    public function show()
	{
		$data['result'] = $this->Md_lapor->getAll();
		$data['title'] = 'Data Lapor';

		modules::load('Dashboard');

		//echo "Alhamdullillah Bisa";
		$this->load->view('dashboard/template/include_headerdata', $data);
		$this->load->view('dashboard/template/include_navbar');
		$this->load->view('dashboard/template/include_sidebar');
		$this->load->view('dashboard/pages/dataLapor', $data);
		$this->load->view('dashboard/template/include_footerdata');
	}

	
}
