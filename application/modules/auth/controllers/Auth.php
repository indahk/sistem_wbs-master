<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Auth extends MX_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
       // $this->load->model('Md_akun');
    }

    public function index()
    {

        $this->load->view('auth/login'); 


        //modules::run('auth/viwes/login');  
        
        //$this->load->module('module/views');
        //$this->controller->method();
        //modules::run('module/views/login');
        //$this->load->module::run('login');
        // $this->load->views('login');     
        //echo "Alhamdullillah Bisa";
    
    }

    public function register()
    {
        //echo "Alhamdullillah Bisa";
        $this->load->view('register');
    }

    public function forgot(){
        $this->load->view("forgot-password");
    }
        
    
}