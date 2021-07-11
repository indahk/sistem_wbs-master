<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Beranda extends MX_Controller{
	

    function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->model('Md_Aspirasi');

		
	}



    public function index()
	{   
		$page_data['page_content'] = 'Beranda/page/contact';
;
	$this->load->view('Beranda/index',$page_data);
	
	
	// $this->load->view('Beranda/page/hero_section');
	// $this->load->view('Beranda/page/hero_section');
	}

	public function getKategori() 
	{
		$data = modules::run('Kategori_masukan/getAll');
		return $data;
	}

	public function Aspirasi()
	{
		// $page_data['data'] = modules::run('Kategori_masukan/getAll');
		$page_data['data'] = $this->getKategori();
		$page_data['page_content'] = 'Beranda/form/form_aspirasi';
		
		$this->load->view('Beranda/index',$page_data);
		// $this->load->view('Beranda/page/beranda');
	}



}