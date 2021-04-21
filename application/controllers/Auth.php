<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('session');
        $this->load->model('Md_pengguna');
		
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/hero_section');
		$this->load->view('pages/Home');
		$this->load->view('templates/footer');
	}


    public  funtion login(){

    }

    public function register(){

    }
}