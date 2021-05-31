<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan extends MX_Controller{
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_permintaan');
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
        $this->load->view('form/form_permintaan');
        $this->load->view('template/footer');

        
	}

	public function addPermintaan(){
		$this->Md_permintaan->addPermohonan();
        $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Ditambahkan!</div>');
        redirect('/Permintaan/showPermohonan');
	}

    public function deletePermohonan(){
		$this->Md_permintaan->deletePermohonan();

		$id             = $this->input->post('id_permohonan');
        $where    = array('id_permohonan' => $id);
        $this->Md_permintaan->deletePermohonan($where, 'tb_permohonan', $id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus!</div>');
        redirect('/Permohonan/showPermohonan');
    }



    public function showPemrintaan(){
		$this->Md_permintaan->alPemrintaan();

    }

    public function getPemrintaan(){
        
    }

	
}
