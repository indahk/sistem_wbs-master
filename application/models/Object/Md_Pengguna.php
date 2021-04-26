<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Md_Pengguan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
    }
    public function allPengguna()
    {
        $query = $this->db->query('select * from tb_aspirasi'); //mendapatkan seluruh data di tb_aspirasi

        return $query->result(); //mengembalikan nilai berupa array
    }
}