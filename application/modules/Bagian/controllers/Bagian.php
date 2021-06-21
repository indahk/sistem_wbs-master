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
        $this->load->view('bagian/test_input');
    }

    public function show()
    {
        modules::load('Dashboard');
        
        $result['data'] = $this->Md_bagian->getAll();
        $data['title'] = 'Data Bagian';

        $this->load->view('dashboard/template/include_headerdata', $data);
		$this->load->view('dashboard/template/include_navbar');
		$this->load->view('dashboard/template/include_sidebar');
		$this->load->view('dashboard/pages/daftarBagian',$result);
		$this->load->view('dashboard/template/include_footerdata');

        
    }


    public function add()
    {
        $nama = $this->input->post('nama_bagian');
        $data = array(
            'nama_bagian' => $nama
        );

        $this->Md_bagian->add($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Ditambahkan!</div>');
        redirect('Bagian/show');
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



        redirect('Bagian/show');
    }
}
