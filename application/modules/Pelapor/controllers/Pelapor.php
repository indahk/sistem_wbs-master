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
		$id             = $this->input->post('id_pelapor');
        $where    = array('id_' => $id);
        $this->Md_->delete($where, 'tb_', $id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus!</div>');
        redirect('//show');
    }

	public function detail($id_pelapor)
	{
		$where = array('id_pelapor' => $id_pelapor);
		$data['pelapor'] = $this->Md_pelapor->getById($where, 'tb_pelapor')->result();
	}





	
}
