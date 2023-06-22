<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_galeri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('M_galeri');
        
    }
    public function index()
    {
        $data = [
            'galeri' => $this->M_galeri->get_all(),
        ];
        $this->load->view('vw_user/header');
        $this->load->view('vw_user/navbar');
        $this->load->view('vw_user/galeri/v_galeri', $data);
        $this->load->view('vw_user/footer');
    }
    public function tambah()
    {
        $this->load->model('M_galeri');
        $data = [
            'galeri' => $this->M_galeri->get_all()
        ];
        $this->load->view('vw_user/header');
        $this->load->view('vw_user/navbar');
        $this->load->view('vw_user/galeri/v_tambah_galeri',$data);
        $this->load->view('vw_user/footer');
    }

    public function add()
    {

        $rules = $this->M_galeri->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->model('M_galeri');
            $data = [
                'galeri' => $this->M_galeri->get_all()
            ];
            $this->load->view('vw_user/header');
            $this->load->view('vw_user/navbar');
            $this->load->view('vw_user/galeri/v_tambah_galeri', $data);
            $this->load->view('vw_user/footer');
        } else {
            $this->M_galeri->insertGaleri();
            redirect('C_galeri');
        }
    }

    public function ubah($id)
    {
        $data['galeri'] = $this->M_galeri->getDetailGaleri($id);
        $this->load->view('vw_user/header');
        $this->load->view('vw_user/navbar');
        $this->load->view('vw_user/galeri/v_ubah_galeri', $data);
        $this->load->view('vw_user/footer');
    }

    public function edit($id)
    {
        $rules = $this->M_galeri->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $data['galeri'] = $this->M_galeri->getDetailGaleri($id);
            $this->load->view('vw_user/header');
            $this->load->view('vw_user/navbar');
            $this->load->view('vw_user/galeri/v_ubah_galeri', $data);
            $this->load->view('vw_user/footer');
        } else {
            $this->M_galeri->editGaleri();
            redirect('C_galeri');
        }
    }

    public function delete($id)
    {
        $this->M_galeri->deleteGaleri($id);
        redirect('C_galeri');
    }

}