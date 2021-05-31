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
    public function allLapor()
    {
        $query = $this->db->query("SELECT * FROM tb_masukan WHERE id_jenis='JN003'"); //mendapatkan seluruh data di tb_lappor
        return $query->result(); //mengembalikan nilai berupa array
    }
    public function getLapor($id)
    {
        $this->db->distinct();
        $this->db->select("*");
        $this->db->from("vw_lapor ");
        $this->db->where("id_masukan", $id);
        return $data_lapor = $this->db->get()->result_array(); //mengembalikan nilai berupa array
    }
    // private function do_lampiran()
    // {
    //     $lampiran = $_FILES['lampiran_lapor'];
    //     if ($lampiran = null) {
    //         echo "nill";
    //     } else {
    //         $config['upload_path']          = './assets/img/';
    //         $config['allowed_types']        = 'gif|jpg|png|jpeg';
    //         $this->upload->initialize($config);
    //         if (!$this->upload->do_upload('lampiran_lapo')) {
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
    //     $product = $this->getlapor($id);
    //     $prd = $product[0];
    //     var_dump($prd);
    //     if ($prd['foto_pupuk'] != null) {
    //         $filename = explode(".", $prd['foto_pupuk'])[0];
    //         return array_map('unlink', glob(FCPATH . "assets/img/pupuk/$filename.*"));
    //     }
    // }
    public function addLapor()
    {
        // $nama = $this->input->post('nama_pelapor');
        // $email = $this->input->post('email_pelapor');
        // $no_tlpn = $this->input->post('tlpn_pelapor');
        // $judul_laporan = $this->input->post('pupuk_deskripsi');
        // $kt_lapor=$this->input->post('');
        // $kt_pelapor=$this->input->post('');
        // $isi_laporan=$this->input->post('   ');
        // $lampiran=$this->input->post('');
        // // $data = array(
        // //     'nama_pupuk' => $nama,
        // //     'harga_pupuk' => $harga,
        // //     'jumlah_pupuk' => $jumlah,
        // //     'foto_pupuk' => $this->do_upload(),
        // //     'deskripsi' => $deskripsi
        // // );
        // // $this->db->insert('pupuk', $data);
    }

}
  