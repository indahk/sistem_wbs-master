<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Md_lapor extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
    }
    public function allAspirasi()
    {
        $query = $this->db->query('select * from tb_pelapor'); //mendapatkan seluruh data di tb_aspirasi

        return $query->result(); //mengembalikan nilai berupa array
    }
    public function getAspirasi($id)
    {
        $this->db->distinct();
        $this->db->select("*");
        $this->db->from("tb_pelapor");
        $this->db->where("id_pelapor", $id);
        return $data = $this->db->get()->result_array(); //mengembalikan nilai berupa array
    }
    private function do_lampiran()
    {
        $lampiran = $_FILES['lampiran_pelaporan'];
        if ($lampiran = null) {
            echo "nill";
        } else {
            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('lampiran_pelaporan')) {
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
        $product = $this->getPelapor($id);
        $prd = $product[0];
        var_dump($prd);
        if ($prd['foto_pupuk'] != null) {
            $filename = explode(".", $prd['foto_pupuk'])[0];
            return array_map('unlink', glob(FCPATH . "assets/img/pupuk/$filename.*"));
        }
    }
    public function addPelapor()
    {
        $judul = $this->input->post('pupuk_nama');
        $isi = $this->input->post('pupuk_harga');
        $jumlah = $this->input->post('pupuk_jumlah');
        $deskripsi = $this->input->post('pupuk_deskripsi');
        $data = array(
            'nama_pupuk' => $nama,
            'harga_pupuk' => $harga,
            'jumlah_pupuk' => $jumlah,
            'foto_pupuk' => $this->do_upload(),
            'deskripsi' => $deskripsi
        );
        $this->db->insert('pupuk', $data);
    }
    function deletePelapor($where, $table, $id)
    { //method hapus data
        var_dump($this->_deleteImage($id));
        $this->db->where($where); //id data
        $this->db->delete($table); //table apa
    }
    public function editPelapor()
    {
        $foto = $_FILES['pupuk_foto'];
        if ($foto['name'] != '') {
            $id = $this->input->post('pupuk_id');
            $this->_deleteImage($id);
            $nama = $this->input->post('pupuk_nama');
            $harga = $this->input->post('pupuk_harga');
            $jumlah = $this->input->post('pupuk_jumlah');
            $deskripsi = $this->input->post('pupuk_deskripsi');
            $data = array(
                'nama_pupuk' => $nama,
                'harga_pupuk' => $harga,
                'jumlah_pupuk' => $jumlah,
                'foto_pupuk' => $this->do_upload(),
                'deskripsi' => $deskripsi
            );
            $this->db->where('id_pupuk', $id);
            $this->db->update('pupuk', $data);
        } else {
            $id = $this->input->post('pupuk_id');
            $nama = $this->input->post('pupuk_nama');
            $harga = $this->input->post('pupuk_harga');
            $jumlah = $this->input->post('pupuk_jumlah');
            $deskripsi = $this->input->post('pupuk_deskripsi');
            $data = array(
                'nama_pupuk' => $nama,
                'harga_pupuk' => $harga,
                'jumlah_pupuk' => $jumlah,
                'deskripsi' => $deskripsi
            );
            $this->db->where('id_pupuk', $id);
            $this->db->update('pupuk', $data);
        }
    }
}
