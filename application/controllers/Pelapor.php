<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelapor extends CI_Controller(){
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_Pelapor');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/pelapor');
		$this->load->view('templates/footer');
	}

	public function addPelapor(){

	}

    public function deletePelapor(){

    }

	public function updatePelapor(){

	}

    public function getPelapor(){}

    public function showPelapor(){}

	
}
