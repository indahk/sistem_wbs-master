<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelapor extends CI_Controller(){
 
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Md_Permohonan');
	}

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/hero_section');
		$this->load->view('pages/permohonan');
		$this->load->view('templates/footer');
	}

	public function addPermohonan($id){
		$data = $this->Md_Permohonan->getPermohonan($id);
        $insertData = array(
            'id'      => $data[0]['id_pupuk'],
            'qty'     => 1,
            'price'   => $data[0]['harga_pupuk'],
            'name'    => $data[0]['nama_pupuk']
        );
        $this->cart->insert($insertData);
        redirect("KeranjangController/Index");
    }
	

    public function deletePermohonan($id)
	{
		$data = array(
            'rowid' => $id,
            'qty' => 0
        );
        $this->cart->update($data);
        redirect("KeranjangController/Index");
    }

	public function upadatePermohonan(){

	}

    public function showPermohonan(){

    }

    public function getPermohonan(){

    }

	
}
