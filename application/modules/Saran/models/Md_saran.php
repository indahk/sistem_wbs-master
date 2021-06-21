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

    private function do_upload()
    {
        $lamp = $_FILES['lampiran'];
        if ($lamp = null) {
            echo "nill";
        } else {
            $config['upload_path']          = './assets/img/pupuk/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx|xlsx';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('lampiran')) {
                echo "gagal upload";
                die();
            } else {
                $lamp = $this->upload->data('file_name');
                return $lamp;
            }
        }
    }
    private function _deleteLampiran($id)
    {
        $saran = $this->getBySaranId($id);
        $srn = $saran[0];
        var_dump($srn);
        if ($srn['lampiran'] != null) {
            $filename = explode(".", $srn['lampiran'])[0];
            return array_map('unlink', glob(FCPATH . "assets/document/sa/$filename.*"));
        }
    }
    public function add()
    {
        $nama = $this->input->post('pupuk_nama');
        $harga = $this->input->post('pupuk_harga');
        $jumlah = $this->input->post('pupuk_jumlah');
        $deskripsi = $this->input->post('pupuk_deskripsi');
        $data = array(
            'nama_pupuk' => $nama,
            'harga_pupuk' => $harga,
            'jumlah_pupuk' => $jumlah,
            'lamp_pupuk' => $this->do_upload(),
            'deskripsi' => $deskripsi
        );
        $this->db->insert('pupuk', $data);
    }
    function deletePupuk($where, $table, $id)
    { //method hapus data
        var_dump($this->_deleteLampiran($id));
        $this->db->where($where); //id data
        $this->db->delete($table); //table apa
    }
    public function editPupuk()
    {
        $lamp = $_FILES['pupuk_lamp'];
        if ($lamp['name'] != '') {
            $id = $this->input->post('pupuk_id');
            $this->_deleteLampiran($id);
            $nama = $this->input->post('pupuk_nama');
            $harga = $this->input->post('pupuk_harga');
            $jumlah = $this->input->post('pupuk_jumlah');
            $deskripsi = $this->input->post('pupuk_deskripsi');
            $data = array(
                'nama_pupuk' => $nama,
                'harga_pupuk' => $harga,
                'jumlah_pupuk' => $jumlah,
                'lamp_pupuk' => $this->do_upload(),
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


    public function getAll()
    {
        $query = $this->db->query('select * from tb_saran'); //mendapatkan seluruh data di tb_saran

        return $query->result(); //mengembalikan nilai berupa array
    }

    public function getBySaranId()
    {
            
    }

    public function getByWhere($where,$data)
    {

    }

    public function updateByWhere($where,$data)
    {

    }

    public function deleteByWhere($where,$data)
    {

    }




  
    
}
