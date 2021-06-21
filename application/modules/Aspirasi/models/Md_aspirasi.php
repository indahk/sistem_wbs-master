<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Md_Aspirasi extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));

        
    }
    public function allAspirasi()
    {
        $query = $this->db->query('select * from vw_aspirasi '); //mendapatkan seluruh data di tb_aspirasi

        return $query->result(); //mengembalikan nilai berupa array
    }
    public function getAspirasi($id)
    {
        $this->db->distinct();
        $this->db->select("*");
        $this->db->from("vw_aspirasi");
        $this->db->where("id_masukan", $id);
        return $data_aspirasi = $this->db->get()->result_array(); //mengembalikan nilai berupa array
    }
    // private function do_lampiran()
    // {
    //     $lampiran = $_FILES['lampiran_aspirasi'];
    //     if ($lampiran = null) {
    //         echo "nill";
    //     } else {
    //         $config['upload_path']          = './assets/document/aspirasi/';
    //         $config['allowed_types']        = 'pdf|docs';
    //         $this->upload->initialize($config);
    //         if (!$this->upload->do_upload('lampiran_aspirasi')) {
    //             echo "gagal upload";
    //             die();
    //         } else {
    //             $lampiran = $this->upload->data('file_name');
    //             return $lampiran;
    //         }
    //     }
    // }
    // private function _deleteLampiran($id)
    // {
    //     $lampiran = $this->getAspirasi($id);
    //     $lamp = $lampiran[0];
    //     var_dump($prd);
    //     if ($lamp['lampiran'] != null) {
    //         $filename = explode(".", $lamp['lampiran'])[0];
    //         return array_map('unlink', glob(FCPATH . "assets/document/aspirasi/$filename.*"));
    //     }
    // }
    public function addAspirasi()
    {
        $nama=$this->input->post('nama');
        $email=$this->input->post('email');
        $notlpn=$this->input->post('nohp');
        $kt_aspirasi=$this->input->post('kt_aspirasi');
        // $kt_pelapor->$this->input->post('kt_pelapor');
        $judul = $this->input->post('judul_aspirasi');
        $isi = $this->input->post('isi_aspirasi');
        $lampiran = $this->input->post('lampiran');
        $data = array(
            'judul_aspirasi' => $judul,
            'isi_aspirasi' => $isi,
            'lampiran_aspirasi' => $this->do_upload()         
        );
        $this->db->insert('vw_aspirasi', $data);
    }
    // 
    // public function editAspirasi()
    // {
    //     $lampiran = $_FILES['lampiran_aspirasi'];
    //     if ($lampiran['name'] != '') {
    //         $id = $this->input->post('id_aspirasi');
    //         $this->_deleteImage($id);
    //         $judul = $this->input->post('judul_aspirasi');
    //         $isi = $this->input->post('isi_aspirasi');
    //         $jumlah = $this->input->post('aspirasi_jumlah');
    //         $deskripsi = $this->input->post('aspirasi_deskripsi');
    //         $data = array(
    //             'judul_aspirasi' => $judul,
    //             'isi_aspirasi' => $isi,
    //             'lampiran_aspirasi' => $this->do_upload()
    //         );
    //         $this->db->where('id_aspirasi', $id);
    //         $this->db->update('tb_aspirasi', $data);
    //     } else {
    //         $id = $this->input->post('id_aspirasi');
    //         $judul = $this->input->post('judul_aspirasi');
    //         $isi = $this->input->post('isi_aspirasi');
    //         $lampiran = $this->input->post('aspirasi_jumlah');
    //         $data = array(
    //             'judul_aspirasi' => $judul,
    //             'isi_aspirasi' => $isi,
    //             'lampiran_aspirasi' => $lampiran
    //         );
    //         $this->db->where('id_aspirasi', $id);
    //         $this->db->update('tb_aspirasi', $data);
    //     }
    // }

    private function do_upload()
    {
        $lampiran = $_FILES['lampiran'];
        if ($lampiran = null) {
            echo "nill";
        } else {
            $config['upload_path']          = './assets/lampiranFile/';
            $config['allowed_types']        = 'pdf|xls|jpg|png|jpeg|docs|xlsx';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('lampiran')) {
                echo "gagal upload";
                die();
            } else {
                $lampiran = $this->upload->data('file_name');
                return $lampiran;
            }
        }
    }

    public function getById($where,$table)
    {
        return $this->db->get_where($table, $where);
    }
}
