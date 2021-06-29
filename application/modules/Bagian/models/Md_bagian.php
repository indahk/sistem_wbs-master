<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Md_bagian extends MX_Controller
{
    var $table = 'tb_bagian';


    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
    }

    public function get($data, $id)
    {
        $this->db->distinct();
        $this->db->select("*");
        $this->db->from("tb_bagian");
        $this->db->where("id_bagian", $id);
        $data = $this->db->get()->result_array();
        return $data;
    }


    function get_table()
    {
        $table = "tb_bagian";
        return $table;
    }

    public function count_all()
    {

        $this->db->from('tbl_menu');
        return $this->db->count_all_results();
    }


    public function add($data)
    {

        $this->db->insert('tb_bagian', $data);
        return $data;
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data)
    {

        $this->db->where($where);

        $this->db->update('tb_bagian', $data);
    }

    function get_bagian($id)
    {
        $this->db->where('id_bagian', $id);
        return $this->db->get('tb_bagian')->row();
    }

    function delete($where, $table)
    {

        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getAll()
    {
        $query = $this->db->get('tb_bagian');
        return $query->result();
        // $data=$this->db->query('SELECT * FROM tb_ktgmasukan');
        // return $data->result();
    }
}
