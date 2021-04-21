<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_helper extends CI_Controllers{

// any_in_array() is not in the Array Helper, so it defines a new function
function any_in_array($needle, $haystack)
{
        $needle = is_array($needle) ? $needle : array($needle);

        foreach ($needle as $item)
        {
                if (in_array($item, $haystack))
                {
                        return TRUE;
                }
        }

        return FALSE;
}

// random_element() is included in Array Helper, so it overrides the native function
function random_element($array)
{
        shuffle($array);
        return array_pop($array);
}

// funtioin pemberian grant access pada database
function grantAccessFor(array()){
    if (!isset($_SESSION['name_admin'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger">you are not logged in!!</div>');
        redirect('/');
    } else {
        $result['data'] = $this->pupukModel->allPupuk();
        $this->load->view('templates/index_header');
        $this->load->view('home/pupuk', $result);
        $this->load->view('templates/index_footer');
}

//menyimpan setiap aksi yang terjadi pada suatu function
function addLog($jenis_aksi, $keterangan_aksi){

}


}