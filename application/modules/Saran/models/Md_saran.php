<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Md_saran extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
    }

    public function add()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }


    public function getAll()
    {
        $query = $this->db->query('select * from tb_saran'); //mendapatkan seluruh data di tb_saran

        return $query->result(); //mengembalikan nilai berupa array
    }

    public function getBySaranId()
    {

    }

    public function getByWhere($where,$data)
    {

    }

    public function updateByWhere($where,$data)
    {

    }

    public function deleteByWhere($where,$data)
    {

    }




  
    
}
