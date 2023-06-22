<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
 

	public function index()
	{
		$this->load->model('M_komentar');
		$data = [
			'komentar' => $this->M_komentar->get_all(),
		];
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('Home/body',$data);
		$this->load->view('layout/footer');
	}
	public function about()
	{
		$this->load->view('layout/header');
		$this->load->view('About/navbar');
		$this->load->view('About/body');
		$this->load->view('layout/footer');
	}
	public function dayatarik()
	{
		$this->load->view('layout/header');
		$this->load->view('DayaTarik/navbar');
		$this->load->view('DayaTarik/body');
		$this->load->view('layout/footer');
	}
	public function contact()
	{
		
		$this->load->view('layout/header');
		$this->load->view('contact/navbar');
		$this->load->view('contact/body');
		$this->load->view('layout/footer');
	}

	
public function fotoGaleri()
	{
		
		$this->load->view('layout/header');
		$this->load->view('vw_user/galeri/navbarGaleri');
		$this->load->view('vw_user/galeri/foto_galeri');
		$this->load->view('layout/footer');
	
}
}


/* End of file  */
/* Location: ./application/controllers/ */