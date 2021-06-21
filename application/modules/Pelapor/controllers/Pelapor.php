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

	public function show()
	{
		$data['result'] = $this->Md_pelapor->allPelapor();
		$data['title'] = 'Data Aspirasi';

		modules::load('Dashboard');

		//echo "Alhamdullillah Bisa";
		$this->load->view('dashboard/template/include_headerdata', $data);
		$this->load->view('dashboard/template/include_navbar');
		$this->load->view('dashboard/template/include_sidebar');
		$this->load->view('dashboard/pages/dataPelapor', $data);
		$this->load->view('dashboard/template/include_footerdata');

	}

	public function add(){

		
		$this->Md_pelapor->add();
        $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Ditambahkan!</div>');
        redirect('Pelapor/show');
	}

    public function delete($id_pelapor)
	{	
		$where = array('id_pelapor' => $id_pelapor);

        $this->Md_pelapor->delete($where, 'tb_pelapor');



        redirect('Pelapor/show');
    }

	public function detail($id_pelapor)
	{
		$where = array('id_pelapor' => $id_pelapor);
		$data['pelapor'] = $this->Md_pelapor->getById($where, 'tb_pelapor')->result();
	}

	





	
}
