<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi extends MX_Controller{
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_aspirasi');


	}

	public function index()
	{   
		
		
		// $this->load->view('Kode_otomatis', $data);
		//	$this->load->view('templates/header');
		//	$this->load->view('templates/hero_section');
		//	$this->load->view('pages/aspirasi');
		//	$this->load->view('templates/footer');
		//  echo 'Hai ini adalah halaman aspirasi';
		modules::load('Beranda');
		$data=modules::run('Kategori_masukan/getAll');
		
		$this->load->view('Beranda/template/header');
		$this->load->view('Beranda/template/hero_section');
		$this->load->view('Beranda/form/form_aspirasi',$data);
		$this->load->view('Beranda/template/footer');

        
	}


	public function get()
	{
		modules::load('Beranda');
		modules::run('Kategori_masukan');
		$data=$this->load->Kategori_masukan->getAll();

		$this->load->view('Beranda/template/header');
		$this->load->view('Beranda/template/hero_section');
		$this->load->view('Beranda/form/form_aspirasi',$data);
		$this->load->view('Beranda/template/footer');
	}


	public function addAspirasi(){
		modules::run('Pelapor');
		// $data=$this->load->pelapor->add();


		// $this->Md_aspirasi->addAspirasi();
        // $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Ditambahkan!</div>');
        // redirect('/Aspirasi/showAspirasi');
	}

    public function deleteAspirasi(){
		$this->Md_aspirasi->deleteAspirasi();

		$id             = $this->input->post('id_aspirasi');
        $where    = array('id_aspirasi' => $id);
        $this->Md_aspirasi->deleteAspirasi($where, 'tb_aspirasi', $id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus!</div>');
        redirect('/Aspirasi/showAspirasi');
    }



    public function showAspirasi()
	{
	// 	$data['kode'] = $this->kode_m->kode();
	// 	$data['tampil'] = $this->kode_m->tampil();
		
		$data['title'] = 'Detail Aspirasi';
		
		modules::load('dashboard');
		$this->load->view('dashboard/template/include_header',$data);
		$this->load->view('dashboard/template/include_navbar');
		$this->load->view('dashboard/template/include_sidebar');
		$this->load->view('dashboard/pages/detailAspirasi');
		$this->load->view('dashboard/template/include_footer');
    }

    public function show()
	{
        $data['result']=$this->Md_aspirasi->allAspirasi();
		$data['title'] = 'Data Aspirasi';
        
        modules::load('Dashboard');
        
        //echo "Alhamdullillah Bisa";
        $this->load->view('dashboard/template/include_headerdata',$data);
        $this->load->view('dashboard/template/include_navbar');
        $this->load->view('dashboard/template/include_sidebar');
        $this->load->view('dashboard/pages/dataAspirasi',$data);
        $this->load->view('dashboard/template/include_footerdata');
    }

	
}
