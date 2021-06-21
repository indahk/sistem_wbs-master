<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Md_pelapor extends MX_Controller
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
        $this->db->from("tb_pelapor");
        $this->db->where("id_pelapor", $id);
        $data = $this->db->get()->result_array();
        return $data;
    }


    function generate_kode($len = 8){
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr( str_shuffle( $chars ), 0, $len );
        return $password;
       }

    public function add()
    {

        $nama=$this->input->post('nama_pelapor');
        $ktg=$this->input->post('kat_pelapor');
        $email=$this->input->post('email_pelapor');
        $nohp=$this->input->post('nohp_pelapor');
        $kode=$this->generate_kode();
        
        $data = array(
            'nama_pelapor' => $nama,
            'ktg_pelapor' => $ktg,
            'email_pelapor' => $email,
            'nohp_pelapor' => $nohp,
            'kode_tiket' =>$kode
        );

        $this->db->insert('tb_pelapor', $data);

        return $data;
    }

    public function update()
    {

    }

    public function delete($where,$table)
    {
        return $this->db->delete($table,$where);
    }


    public function getAll($id_pelapor)
    {
        $this->db->distinct();
        $this->db->select("*");
        $this->db->from("tb_pelapor");
        $this->db->where("id_pelapor", $id_pelapor);
        return $data_pelapor = $this->db->get()->result_array();
    }

    public function getById($where,$table)
    {
        return $this->db->get_where($table, $where);
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
