<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Menu extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Mod_menu'));
        $this->load->model(array('Mod_userlevel'));
    }

    public function index()
    {
        // $this->load->helper('url');
        $this->template->load('layoutbackend','admin/menu_data');
    }

 public function ajax_list()
    {
        ini_set('memory_limit','512M');
        set_time_limit(3600);
        $list = $this->Mod_menu->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $menu) {
            $no++;
            $row = array();
            $row[] = $menu->nama_menu;
            $row[] = $menu->link;
            $row[] = $menu->icon;
            $row[] = $menu->urutan;
            $row[] = $menu->is_active;
            $row[] = $menu->id_menu;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Mod_menu->count_all(),
                        "recordsFiltered" => $this->Mod_menu->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function addmenu()
    {
            $this->load->view('menu/add_menu');
    }

    public function viewmenu()
    {
			$id = $this->input->post('id');
            $table = $this->input->post('table');
            $data['table'] = $table;
            $data['data_field'] = $this->db->field_data($table);
            $data['data_table'] = $this->Mod_menu->view_menu($id)->result_array();
            $this->load->view('admin/view', $data);
		
    }

    public function editmenu($id)
    {
            $data = $this->Mod_menu->get_menu($id);
            echo json_encode($data);
    }

    public function insert()
    {
        $this->_validate();
			$save  = array(
                'nama_menu'	=> $this->input->post('nama_menu'),
                'link'  	=> $this->input->post('link'),
                'icon'   	=> $this->input->post('icon'),
                'urutan'  	=> $this->input->post('urutan'),
                'is_active' => $this->input->post('is_active')
            );
            $this->Mod_menu->insertMenu("tbl_menu", $save);
            // $id_level = $this->session->userdata['id_level'];
            $nama_menu = $this->input->post('nama_menu');
            $get_id = $this->Mod_menu->get_nama_menu($nama_menu);
            $levels = $this->Mod_userlevel->getAll()->result();
            foreach ($levels as $row) {
                $data = array(
                'id_menu'   => $get_id->id_menu,
                'id_level'  => $row->id_level,
                'view_level' => 'N'
                );
                //insert ke akses menu
                $this->Mod_menu->insertaksesmenu("tbl_akses_menu", $data);
            }
            
            echo json_encode(array("status" => TRUE));
    }

    public function update()
    {
        $this->_validate();
        $id_menu      = $this->input->post('id_menu');
        $save  = array(
            'nama_menu' => $this->input->post('nama_menu'),
            'link'      => $this->input->post('link'),
            'icon'      => $this->input->post('icon'),
            'urutan'    => $this->input->post('urutan'),
            'is_active' => $this->input->post('is_active')
        );
        $this->Mod_menu->updateMenu($id_menu, $save);
        echo json_encode(array("status" => TRUE));
    }
    public function delete()
    {
        $id_menu = $this->input->post('id_menu');
        $this->Mod_menu->deleteMenu($id_menu, 'tbl_menu');
        $this->Mod_menu->deleteakses($id_menu, 'tbl_akses_menu');
        $ceksubmenu = $this->Mod_userlevel->getIdsubmenu($id_menu)->result();
        foreach ($ceksubmenu as $row) {
        $idsubmenu = $row->id_submenu;
        $this->Mod_menu->deleteakses_submenu($idsubmenu, 'tbl_akses_submenu');
        }
        
        echo json_encode(array("status" => TRUE));
    }


    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('nama_menu') == '')
        {
            $data['inputerror'][] = 'nama_menu';
            $data['error_string'][] = 'Menu is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('link') == '')
        {
            $data['inputerror'][] = 'link';
            $data['error_string'][] = 'Link is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('icon') == '')
        {
            $data['inputerror'][] = 'icon';
            $data['error_string'][] = 'Icon is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('is_active') == '')
        {
            $data['inputerror'][] = 'is_active';
            $data['error_string'][] = 'Please select Is Active';
            $data['status'] = FALSE;
        }

        if($this->input->post('urutan') == '')
        {
            $data['inputerror'][] = 'urutan';
            $data['error_string'][] = 'Urutan is required';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
}