<?php
(defined('BASEPATH')) or exit('No direct script access allowed');

class Auth extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Md_auth');
        $this->load->helper('my_helper');
        
    }

    public function index()
    {   
        modules::run('Dashboard');

        $logged_in = $this->session->userdata('logged_in');
        if ($logged_in==TRUE) {
            redirect('Dashboard');
        }else{
            // $aplikasi['aplikasi'] = $this->Md_auth->Aplikasi()->row();
            $this->load->view('template/include_headerlogin');
            $this->load->view('auth/login');
            $this->load->view('template/include_footerlogin');
        }
    }//end function index

    function login()
    {
        $this->load->helper('my_helper');
        // $this->my_helper->anti_injection();
        $this->_validate();
        //cek username database
        $username = anti_injection($this->input->post('username'));

        if($this->Md_auth->check_db($username)->num_rows()==1) {
            $db = $this->Md_auth->check_db($username)->row();
            // $apl = $this->Md_auth->Aplikasi()->row();

            if(hash_verified(anti_injection($this->input->post('password')), $db->password)) {
            //cek username dan password yg ada di database
                $userdata = array(
                    'id_user'  => $db->id_user,
                    'username'    => ucfirst($db->username),
                    'full_name'   => ucfirst($db->full_name),
                    'password'    => $db->password,
                    'id_level'    => $db->id_level,
                    // 'aplikasi'    => $apl->nama_aplikasi,
                    // 'title'       => $apl->title,
                    // 'logo'        => $apl->logo,
                    // 'nama_owner'     => $apl->nama_owner,
                    'image'       => $db->image,
                    'logged_in'    => TRUE
                );

                $this->session->set_userdata($userdata);
                $data['status'] = TRUE;
                echo json_encode($data);
            }else{

                $data['pesan'] = "Username atau Password Salah!";
                $data['error'] = TRUE;
                echo json_encode($data);
            }
        }else{
            $data['pesan'] = "Username atau Password belum terdaftar!";
            $data['error'] = TRUE;
            echo json_encode($data);
        }
        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->driver('cache');
        $this->cache->clean();
        ob_clean();
        redirect('login');
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('username') == '')
        {
            $data['inputerror'][] = 'username';
            $data['error_string'][] = 'Username is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('password') == '')
        {
            $data['inputerror'][] = 'password';
            $data['error_string'][] = 'Password is required';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
}


