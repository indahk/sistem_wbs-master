<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller(){
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_Lapor');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/hero_section');
		$this->load->view('pages/lapor');
		$this->load->view('templates/footer');
	}

	public function addLapor(){

	}

    public function deleteLapor(){

    }

	public function deleteLapor(){

	}

	public function showLapor(){

    }

    public function getLapor(){
        
    }

	
}
