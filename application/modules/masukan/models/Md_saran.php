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
        $query = $this->db->query('select * from tb_aspirasi'); //mendapatkan seluruh data di tb_aspirasi

        return $query->result(); //mengembalikan nilai berupa array
    }
    public function getSaran($id)
    {
        $this->db->distinct();
        $this->db->select("*");
        $this->db->from("tb_aspirasi");
        $this->db->where("id_aspirasi", $id);
        return $data = $this->db->get()->result_array(); //mengembalikan nilai berupa array
    }
    private function do_lampiran()
    {
        $lampiran = $_FILES['lampiran_aspirasi'];
        if ($lampiran = null) {
            echo "nill";
        } else {
            $config['upload_path']          = './assets/img/pupuk/';
            $config['allowed_types']        = 'pdf|docs';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('lampiran_aspirasi')) {
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
        $product = $this->getAspirasi($id);
        $prd = $product[0];
        var_dump($prd);
        if ($prd['foto_pupuk'] != null) {
            $filename = explode(".", $prd['foto_pupuk'])[0];
            return array_map('unlink', glob(FCPATH . "assets/img/pupuk/$filename.*"));
        }
    }
    public function addAspirasi()
    {
        $judul = $this->input->post('judul_aspirasi');
        $isi = $this->input->post('isi_aspirasi');
        $lampiran = $this->input->post('lampiran');
        $data = array(
            'judul_aspirasi' => $judul,
            'isi_aspirasi' => $isi,
            'lampiran_aspirasi' => $this->do_upload()         
        );
        $this->db->insert('tb_aspirasi', $data);
    }
    function deleteSaran($where, $table, $id)
    { //method hapus data
        var_dump($this->_deleteImage($id));
        $this->db->where($where); //id data
        $this->db->delete($table); //table apa
    }
    public function editSaran()
    {
        $lampiran = $_FILES['lampiran_aspirasi'];
        if ($lampiran['name'] != '') {
            $id = $this->input->post('id_aspirasi');
            $this->_deleteImage($id);
            $judul = $this->input->post('judul_aspirasi');
            $isi = $this->input->post('isi_aspirasi');
            $jumlah = $this->input->post('pupuk_jumlah');
            $deskripsi = $this->input->post('pupuk_deskripsi');
            $data = array(
                'judul_aspirasi' => $judul,
                'isi_aspirasi' => $isi,
                'lampiran_aspirasi' => $this->do_upload()
            );
            $this->db->where('id_aspirasi', $id);
            $this->db->update('tb_aspirasi', $data);
        } else {
            $id = $this->input->post('id_aspirasi');
            $judul = $this->input->post('judul_aspirasi');
            $isi = $this->input->post('isi_aspirasi');
            $lampiran = $this->input->post('pupuk_jumlah');
            $data = array(
                'judul_aspirasi' => $judul,
                'isi_aspirasi' => $isi,
                'lampiran_aspirasi' => $lampiran
            );
            $this->db->where('id_aspirasi', $id);
            $this->db->update('tb_aspirasi', $data);
        }
    }
}
