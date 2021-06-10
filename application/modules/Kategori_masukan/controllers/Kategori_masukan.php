<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_masukan extends MX_Controller{
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_katMasukan');
	}

	public function index()
	{   
	
        
	}

    public function getAll()
    {
        $result['data'] = $this->Md_katMasukan->getAll();
        return $result;

      
    }

    public function add()
    {
		

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
