<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends MX_Controller{
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_lapor');
	}

	public function index()
	{   
        //	$this->load->view('templates/header');
        //	$this->load->view('templates/hero_section');
        //	$this->load->view('pages/aspirasi');
        //	$this->load->view('templates/footer');
        //  echo 'Hai ini adalah halaman aspirasi';
        $this->load->view('template/header');
        $this->load->view('hero_section');
        $this->load->view('form/form_lapor');
        $this->load->view('template/footer');

        
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

	
}
