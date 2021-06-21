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
	//	$this->load->view('templates/header');
	//	$this->load->view('templates/hero_section');   
	//	$this->load->view('pages/aspirasi');
	//	$this->load->view('templates/footer');
	//  echo 'Hai ini adalah halaman aspirasi';
	$this->load->view('template/header');
	$this->load->view('hero_section');
	$this->load->view('page/beranda');
	$this->load->view('template/footer');

        
	}

	public function formAspirasi()
	{
		
	}



}