<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Md_bagian extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
    }

    public function get($data,$id)
    {
        $this->db->distinct();
        $this->db->select("*");
        $this->db->from("tb_bagian");
        $this->db->where("id_bagian", $id);
        $data = $this->db->get()->result_array();
        return $data;
    }



    public function add()
    {

        $nama=$this->input->post('nama_bagian');
       
     
        
        $data = array(
            'nama_bagian' => $nama
        );

        $this->db->insert('tb_bagian', $data);

        return $data;
    }

    public function update()
    {

    }

    public function delete()
    {

    }


 
    public function getAll()
    {   
        $query = $this->db->get('tb_bagian');
        return $query->result();
        // $data=$this->db->query('SELECT * FROM tb_ktgmasukan');
        // return $data->result();
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
