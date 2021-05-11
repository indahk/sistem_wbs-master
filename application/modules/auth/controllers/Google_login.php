<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Google_login extends MX_Controller{



 public function __construct()
 {
  parent::__construct();
  //$this->load->model('auth/Google_login_model');
 }

 public function index()
 {

     $this->load->view('auth/google_login'); 


     //modules::run('auth/viwes/login');  
     
     //$this->load->module('module/views');
     //$this->controller->method();
     //modules::run('module/views/login');
     //$this->load->module::run('login');
     // $this->load->views('login');     
     //echo "Alhamdullillah Bisa";
 
 }

 function login()
 {
  include_once APPPATH . "libraries/vendor/autoload.php";

  $google_client            = new Google_Client();

  $google_client->setClientId(''); //Define your ClientID

  $google_client->setClientSecret(''); //Define your Client Secret Key

  $google_client->setRedirectUri(''); //Define your Redirect Uri

  $google_client->addScope('email');

  $google_client->addScope('profile');

  if(isset($_GET["code"]))
  {
   $token                   = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

   if(!isset($token["error"]))
   {
    $google_client->setAccessToken($token['access_token']);

    $this->session->set_userdata('access_token', $token['access_token']);

    $google_service         = new Google_Service_Oauth2($google_client);

    $data                   = $google_service->userinfo->get();

    $current_datetime       = date('Y-m-d H:i:s');

    if($this->google_login_model->Is_already_register($data['id']))
    {
     //update data
     $user_data             = array(
      'first_name' => $data['given_name'],
      'last_name'  => $data['family_name'],
      'email_address' => $data['email'],
      'profile_picture'=> $data['picture'],
      'updated_at' => $current_datetime
     );

     $this->google_login_model->Update_user_data($user_data, $data['id']);
    }
    else
    {
     //insert data
     $user_data             = array(
      'login_oauth_uid' => $data['id'],
      'first_name'  => $data['given_name'],
      'last_name'   => $data['family_name'],
      'email_address'  => $data['email'],
      'profile_picture' => $data['picture'],
      'created_at'  => $current_datetime
     );

     $this->google_login_model->Insert_user_data($user_data);
    }
    $this->session->set_userdata('user_data', $user_data);
   }
  }
  $login_button             = '';
  if(!$this->session->userdata('access_token'))
  {
   $login_button            = '<a href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'asset/sign-in-with-google.png" /></a>';
   $data['login_button']    = $login_button;
   $this->load->view('google_login', $data);
  }
  else
  {
   $this->load->view('google_login', $data);
  }
 }

 function logout()
 {
  $this->session->unset_userdata('access_token');

  $this->session->unset_userdata('user_data');

  redirect('google_login/login');
 }
 
}



