<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Home extends CI_Controller
{ 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth');
		$this->Auth->cek_login();
  }

  public function index()
  {
    $data = [
      'data_user' => $this->Auth->get_all(),
    ];
    $this->load->view('vw_user/header');
    $this->load->view('vw_user/navbar');
    $this->load->view('vw_user/body', $data);
    $this->load->view('vw_user/footer');
  }
}


/* End of file Home.php.php */
/* Location: ./application/controllers/Home.php.php */