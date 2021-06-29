<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bagian extends MX_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Md_bagian');
    }

    public function index()
    {


        $page_data['page_name']='Daftar Bagian';
        $page_data['page_title']='Data Bagian';
        $page_data['page_desc']='Halaman Daftar Bagian';

        modules::load('Dashboard');
        
        $result['data'] = $this->Md_bagian->getAll();
        // $data['title'] = 'Data Bagian';

        $this->load->view('dashboard/template/include_headerdata', $page_data);
		$this->load->view('dashboard/template/include_navbar');
		$this->load->view('dashboard/template/include_sidebar');
		$this->load->view('dashboard/pages/daftarBagian',$result);
		$this->load->view('dashboard/template/include_footerdata');

        

        // $this->load->view('bagian/test_input');
    }

    public function show()
    {
        

       
    }


    public function ajax_list()
    {
        ini_set('memory_limit','512M');
        set_time_limit(3600);
        $list = $this->Md_bagian->getAll();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $bagian) {
            $no++;
            $row = array();
            $row[] = $bagian->id_bagian;
            $row[] = $bagian->nama_bagian;
           
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Md_bagian->count_all(),
                        
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function add()
    {
        $this->_validate();
        $nama = $this->input->post('nama_bagian');
        $data = array(
            'nama_bagian' => $nama
        );

        $this->Md_bagian->add($data);
        // $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Ditambahkan!</div>');
        redirect('Bagian/');
    }

    function update()
    { 
        $id_bagian = $this->input->post('id_bagian');
        $nama = $this->input->post('nama_bagian');
        $data = array(
                'nama_bagian' => $nama );
        $where = array('id_bagian' => $id_bagian);

       
        
        //
        // 
        // );

        // $where = array('id_bagian' => $id);

        $this->Md_bagian->update_data($where,$data);

        redirect('bagian/show');
    }

    public function edit($id_bagian)
    {
        $where = array('id_bagian' => $id_bagian);

        $data['bagian'] = $this->Md_bagian->edit_data($where, 'tb_bagian')->result();

        $this->load->view('v_edit', $data);
    }

    public function delete($id_bagian)
    {

        $where = array('id_bagian' => $id_bagian);

        $this->Md_bagian->delete($where, 'tb_bagian');

        

        redirect('Bagian/');
    }


    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('nama_bagian') == '') {
            $data['inputerror'][] = 'nama_bagian';
            $data['error_string'][] = 'Nama bagian tidak boleh kosong';
            $data['status'] = FALSE;
        }

        // if ($this->input->post('nama_aplikasi') == '') {
        //     $data['inputerror'][] = 'nama_aplikasi';
        //     $data['error_string'][] = 'Nama Aplikasi Tidak boleh kosong';
        //     $data['status'] = FALSE;
        // }

        // if ($this->input->post('alamat') == '') {
        //     $data['inputerror'][] = 'alamat';
        //     $data['error_string'][] = 'Alamat Tidak boleh kosong';
        //     $data['status'] = FALSE;
        // }

        // if ($this->input->post('tlp') == '') {
        //     $data['inputerror'][] = 'tlp';
        //     $data['error_string'][] = 'No Telpon Tidak boleh kosong';
        //     $data['status'] = FALSE;
        // }

        // if ($this->input->post('title') == '') {
        //     $data['inputerror'][] = 'title';
        //     $data['error_string'][] = 'Title Tidak boleh kosong';
        //     $data['status'] = FALSE;
        // }

        // if ($this->input->post('copy_right') == '') {
        //     $data['inputerror'][] = 'copy_right';
        //     $data['error_string'][] = 'Copy Right tidak boleh kosong';
        //     $data['status'] = FALSE;
        // }

        // if ($this->input->post('tahun') == '') {
        //     $data['inputerror'][] = 'tahun';
        //     $data['error_string'][] = 'Tahun tidak boleh kosong';
        //     $data['status'] = FALSE;
        // }


        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }
}
