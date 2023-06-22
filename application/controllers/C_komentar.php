<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_komentar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('M_komentar');
        
    }

    public function index()
    {
        $data = [
            'komentar' => $this->M_komentar->get_all(),
        ];
        $this->load->view('vw_user/header');
        $this->load->view('vw_user/navbar');
        $this->load->view('vw_user/komentar/v_komentar', $data);
        $this->load->view('vw_user/footer');
    }
    public function tambah()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('contact/body');
        $this->load->view('layout/footer');
    }

    public function add()
    {
        $this->M_komentar->insertKomentar();
        redirect('index');
    }

    public function delete($id)
    {
        $this->M_komentar->deleteKomentar($id);
        redirect('C_komentar');
    }

    public function balas($id)
    {
        $data['komentar'] = $this->M_komentar->getDetailKomentar($id);
        $this->load->view('vw_user/header');
        $this->load->view('vw_user/navbar');
        $this->load->view('vw_user/komentar/v_balas_komentar', $data);
        $this->load->view('vw_user/footer');
    }

    public function edit($id)
    {
        
            $this->M_komentar->editKomentar();
            redirect('C_komentar');
        
    }
}

/* End of file C_komentar.php and path \application\controllers\C_komentar.php */
