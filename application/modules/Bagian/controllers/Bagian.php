<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends MX_Controller{
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_bagian');


	}

	public function index()
    {
        $this->load->view('bagian/test_input');
        
    }


	public function get()
	{
       
	}

    public function show()
    {
        $data['result'] = $this->Md_bagian->getAll();
        return $data;
        // var_dump($result);
       $this->load->view('bagian/test_output',$data);
        
    }


	public function add(){
		$this->Md_bagian->add();
        $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Ditambahkan!</div>');
        redirect('Bagian/index');
        
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
