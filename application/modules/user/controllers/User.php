<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller{
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_user');
	}

	public function index()
	{   
		$page_data['page_name']='Log Sistem';
		$page_data['page_title'] ='Log Sistem';
		$page_data['page_desc'] ='List log aktivitas pengguna';

		modules::load('dashboard');
		$this->load->view('dashboard/template/include_header', $page_data);
		$this->load->view('dashboard/template/include_navbar');
		$this->load->view('dashboard/template/include_sidebar');
		$this->load->view('user', $page_data);
		$this->load->view('dashboard/template/include_footer');

        
	}

    function show($param1,$param2)
    {
        
    }

    function add()
    {

    }

    function get($param1,$param2)
    {

    }

    function update()
    {

    }

    function delete()
    {

    }

    function pagination() 
    {

    }

  


    // public function showSaran()
    // {
	// 	$this->load->view('dashboard1/pages/dataSaran');

    // }

	// public function addSaran(){
	// 	$this->Md_aspirasi->addSaran();
    //     $this->session->set_flashdata('message', '<div class="alert alert-success">Saran Berhasil dikirimkan</div>');
    //     redirect('/Saran/showSaran');
	// }

    // public function getSaran(){
        
    // }


    // public function update()
    // {
        
    // }

    // public function deleteSaran(){
	// 	$this->Md_saran->deleteSaran();

	// 	$id             = $this->input->post('id_saran');
    //     $where    = array('id_saran' => $id);
    //     $this->Md_saran->deleteSaran($where, 'tb_saran', $id);
    //     $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus!</div>');
    //     redirect('/Saran/showSaran');
    // }



    

    

	
}
