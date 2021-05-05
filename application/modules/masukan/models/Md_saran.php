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
    public function allSaran()
    {
        $query = $this->db->query('select * from tb_saran'); //mendapatkan seluruh data di tb_saran

        return $query->result(); //mengembalikan nilai berupa array
    }
    public function getSaran($id)
    {
        $this->db->distinct();
        $this->db->select("*");
        $this->db->from("tb_saran");
        $this->db->where("id_saran", $id);
        return $data = $this->db->get()->result_array(); //mengembalikan nilai berupa array
    }
    private function do_lampiran()
    {
        $lampiran = $_FILES['lampiran_saran'];
        if ($lampiran = null) {
            echo "nill";
        } else {
            $config['upload_path']          = './assets/img/pupuk/';
            $config['allowed_types']        = 'pdf|docs';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('lampiran_saran')) {
                echo "gagal upload";
                die();
            } else {
                $lampiran = $this->upload->data('file_name');
                return $lampiran;
            }
        }
    }
    private function _deleteLampiran($id)
    {
        $product = $this->getsaran($id);
        $prd = $product[0];
        var_dump($prd);
        if ($prd['foto_pupuk'] != null) {
            $filename = explode(".", $prd['foto_pupuk'])[0];
            return array_map('unlink', glob(FCPATH . "assets/img/pupuk/$filename.*"));
        }
    }
    public function addsaran()
    {
        $judul = $this->input->post('judul_saran');
        $isi = $this->input->post('isi_saran');
        $lampiran = $this->input->post('lampiran');
        $data = array(
            'judul_saran' => $judul,
            'isi_saran' => $isi,
            'lampiran_saran' => $this->do_upload()         
        );
        $this->db->insert('tb_saran', $data);
    }
    function deleteSaran($where, $table, $id)
    { //method hapus data
        var_dump($this->_deleteImage($id));
        $this->db->where($where); //id data
        $this->db->delete($table); //table apa
    }
    public function editSaran()
    {
        $lampiran = $_FILES['lampiran_saran'];
        if ($lampiran['name'] != '') {
            $id = $this->input->post('id_saran');
            $this->_deleteImage($id);
            $judul = $this->input->post('judul_saran');
            $isi = $this->input->post('isi_saran');
            $jumlah = $this->input->post('pupuk_jumlah');
            $deskripsi = $this->input->post('pupuk_deskripsi');
            $data = array(
                'judul_saran' => $judul,
                'isi_saran' => $isi,
                'lampiran_saran' => $this->do_upload()
            );
            $this->db->where('id_saran', $id);
            $this->db->update('tb_saran', $data);
        } else {
            $id = $this->input->post('id_saran');
            $judul = $this->input->post('judul_saran');
            $isi = $this->input->post('isi_saran');
            $lampiran = $this->input->post('pupuk_jumlah');
            $data = array(
                'judul_saran' => $judul,
                'isi_saran' => $isi,
                'lampiran_saran' => $lampiran
            );
            $this->db->where('id_saran', $id);
            $this->db->update('tb_saran', $data);
        }
    }
}
