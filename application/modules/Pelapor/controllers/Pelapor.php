<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelapor extends MX_Controller{
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_pelapor');


	}

	public function index()
    {
        $this->load->view('Pelapor/test_input');
    }


	public function get()
	{
		
	}


	public function add(){
		$this->Md_pelapor->add();
        $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Ditambahkan!</div>');
        redirect('/Aspirasi/showAspirasi');
	}

    public function delete(){
		$this->Md_->delete();

		$id             = $this->input->post('id_');
        $where    = array('id_' => $id);
        $this->Md_->delete($where, 'tb_', $id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus!</div>');
        redirect('//show');
    }





	
}
