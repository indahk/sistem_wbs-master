<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helpers('url');
		
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/hero_section');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}
}

