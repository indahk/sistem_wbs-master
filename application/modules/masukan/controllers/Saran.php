<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends MX_Controller{
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_saran');
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
	$this->load->view('form_saran');
	$this->load->view('template/footer');

        
	}

	public function addSaran(){
		$this->Md_aspirasi->addSaran();
        $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Ditambahkan!</div>');
        redirect('/Saran/showSaran');
	}

    public function deleteSaran(){
		$this->Md_saran->deleteSaran();

		$id             = $this->input->post('id_saran');
        $where    = array('id_saran' => $id);
        $this->Md_saran->deleteSaran($where, 'tb_saran', $id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus!</div>');
        redirect('/Saran/showSaran');
    }



    public function showSaran(){
		$this->Md_saran->allSaran();

    }

    public function getSaran(){
        
    }

	
}
