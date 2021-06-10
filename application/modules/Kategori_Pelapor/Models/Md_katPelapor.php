<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Md_katPelapor extends MX_Controller
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

    function _update($id, $data) 
    {
        $this->db->where('id_ktgPelapor', $id);
        $this->db->update('tb_ktgPelapor', $data);
    }
    
    public function delete($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_ktPelapor',$data);
    }


    public function getAll()
    {   
        $query = $this->db->get('tb_ktgPelapor');
        return $query->result_array();

        // $data=$this->db->query('SELECT * FROM tb_ktgPelapor');
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
