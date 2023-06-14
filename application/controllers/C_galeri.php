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
        // $this->load->view('vw_user/header');
        // $this->load->view('vw_user/navbar');
        $this->load->view('vw_user/galeri/v_tambah_galeri');
        $this->load->view('vw_user/footer');
    }

    public function add()
    {
        $this->M_galeri->insertGaleri();
        redirect('C_galeri');
    }
    public function delete($id)
    {
        $this->M_galeri->deleteGaleri($id);
        redirect('C_galeri');
    }

}