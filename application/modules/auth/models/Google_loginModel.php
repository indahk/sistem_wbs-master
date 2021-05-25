<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Google_loginModel extends MX_Controller
{

    public function Is_already_register($id)
    {
     $this->db->where('login_oauth_uid', $id);
     $query = $this->db->get('tb_logingoogle');
     if($query->num_rows() > 0)
     {
      return true;
     }
     else
     {
      return false;
     }
    }
   
    public function Update_user_data($data, $id)
    {
     $this->db->where('login_oauth_uid', $id);
     $this->db->update('tb_logingoogle', $data);
    }
   
    public function Insert_user_data($data)
    {
     $this->db->insert('tb_logingoogle', $data);
    }
}
