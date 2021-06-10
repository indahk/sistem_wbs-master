<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends MX_Controller{
 
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
	$this->load->view('form/form_saran');
	$this->load->view('template/footer');

        
	}

    public function showSaran()
    {
		$this->load->view('dashboard1/pages/dataSaran');

    }

	public function addSaran(){
		$this->Md_aspirasi->addSaran();
        $this->session->set_flashdata('message', '<div class="alert alert-success">Saran Berhasil dikirimkan</div>');
        redirect('/Saran/showSaran');
	}

    public function getSaran(){
        
    }


    public function update()
    {
        
    }

    public function deleteSaran(){
		$this->Md_saran->deleteSaran();

		$id             = $this->input->post('id_saran');
        $where    = array('id_saran' => $id);
        $this->Md_saran->deleteSaran($where, 'tb_saran', $id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus!</div>');
        redirect('/Saran/showSaran');
    }



    

    

	
}
