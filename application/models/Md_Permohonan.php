<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Md_Permohonan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
    }
    public function allPermohonan()
    {
        $query = $this->db->query('select * from tb_aspirasi'); //mendapatkan seluruh data di tb_aspirasi

        return $query->result(); //mengembalikan nilai berupa array
    }
    public function getPermohonan($id)
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
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
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
        $product = $this->getPermohonan($id);
        $prd = $product[0];
        var_dump($prd);
        if ($prd['foto_pupuk'] != null) {
            $filename = explode(".", $prd['foto_pupuk'])[0];
            return array_map('unlink', glob(FCPATH . "assets/img/pupuk/$filename.*"));
        }
    }
    public function addPermohonan()
    {
        $judul = $this->input->post('judul_permohonan');
        $isi = $this->input->post('isi_permohonan');
        $lampiran = $this->input->post('lampiran_permohonan');
        $data = array(
            'judul_permohonan' => $judul,
            'isi_permohonan' => $isi,
            'lampiran_permohonan' => $this->do_upload()
        );
        $this->db->insert('tb_permohonan', $data);
    }

    function deletPermohonan($where, $table, $id)
    { //method hapus data
        var_dump($this->_deleteImage($id));
        $this->db->where($where); //id data
        $this->db->delete($table); //table apa
    }
    public function editPermohonan()
    {
        $foto = $_FILES['pupuk_foto'];
        if ($foto['name'] != '') {
            $id = $this->input->post('id_permohonan');
            $this->_deleteImage($id);
            $judul = $this->input->post('judul_permohonan');
            $isi = $this->input->post('isi_permohonan');
            $lampiran = $this->input->post('lampiran_permohonan');
            $data = array(
                'judul_permohonan' => $judul,
                'isi_permohonan' => $isi,
                'lampiran_permohonan' => $lampiran
            );
            $this->db->where('id_permohonan', $id);
            $this->db->update('tb_permohonan', $data);
        } else {
            $id = $this->input->post('id_permohonan');
            $judul = $this->input->post('judul_permohonan');
            $isi = $this->input->post('isi_permohonan');
            $lampiran = $this->input->post('lampiran_permohonan');
            $data = array(
                'judul_permohonan' => $judul,
                'isi_permohonan' => $isi,
                'lampiran_permohonan' => $lampiran
            );
            $this->db->where('id_permohonan', $id);
            $this->db->update('tb_permohonan', $data);
        }
    }
}
