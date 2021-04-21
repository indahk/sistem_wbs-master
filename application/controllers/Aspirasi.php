<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi extends CI_Controller{
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helpers('url');
		$this->load->model('Md_Aspirasi');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/aspirasi');
		$this->load->view('templates/footer');
	}

	public function addAspirasi(){
		$this->Md_aspirasi->addAspirasi();
        $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Ditambahkan!</div>');
        redirect('/Aspirasi/showAspirasi');
	}

    public function deleteAspirasi(){
		$this->Md_aspirasi->deleteAspirasi();

		$id = $this->input->post('id_aspirasi');
        $where = array('id_aspirasi' => $id);
        $this->Md_aspirasi->deleteAspirasi($where, 'tb_aspirasi', $id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus!</div>');
        redirect('/Aspirasi/showAspirasi');
    }



    public function showAspirasi(){
		$this->Md_aspirasi->allAspirasi();

    }

    public function getAspirasi(){
        
    }

	
}
