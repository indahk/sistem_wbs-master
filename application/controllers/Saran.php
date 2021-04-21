<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller(){
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_Saran');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/saran');
		$this->load->view('templates/footer');
	}

	public function addSaran(){
		$this->Md_Saran->addSaran();
       // $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Ditambahkan!</div>');
        redirect('/Saran/showSaran');
	}

    public function deleteSaran(){
		$id = $this->input->post('id_saran');
        $where = array('id_saran' => $id);
        $this->Md_saran->deleteSaran($where, 'pupuk', $id);
      //  $this->session->set_flashdata('message', '<div class="alert alert-danger">Berhasil Dihapus!</div>');
        redirect('/Saran/showSaran');
    }

    public function updateSaran(){
		$this->Md_saran->updateSaran();
		$where= array('id_saran' => $id);
		//  $this->session->set_flashdata('message', '<div class="alert alert-danger">Berhasil Dihapus!</div>');
		redirect('/Saran/showSaran');
	}

    public function showSaran(){

    }

    
    public function getSaran(){
		
	}

    
	
}
