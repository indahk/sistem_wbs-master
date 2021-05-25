<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed');


class User extends MX_Controller{
    
    public function Login($email) //cek login
    {
        return $this->db->get_where('akun', ['email' => $email])->row_array();
    }
    public function CheckPwd($email, $password) //cek login
    {
        return $this->db->get_where('akun', ['email' => $email, 'password' => $password])->row_array();
    }
    public function tambah($data, $table) //function insert data login
    {
        $this->db->insert($table, $data);
    }
    public function alldata()
    {
        $query = $this->db->query('select * from akun where jenis_akun = "3"'); //mendapatkan seluruh data di table user

        return $query->result(); //mengembalikan nilai berupa array
    }
    function hapus_data($where, $table)
    { //method hapus data
        $this->db->where($where); //id data
        $this->db->delete($table); //table apa
    }
    public function selectdata($id)
    {
        $this->db->distinct();
        $this->db->select("*");
        $this->db->from("akun");
        $this->db->where("id_akun", $id);
        return $this->db->get()->result_array(); //mengembalikan nilai berupa array
    }
    public function editData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
