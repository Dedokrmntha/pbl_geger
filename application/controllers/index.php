<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
 

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('Home/body');
		$this->load->view('layout/footer');
	}
	public function about()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('About/body');
		$this->load->view('layout/footer');
	}
	public function dayatarik()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('DayaTarik/body');
		$this->load->view('layout/footer');
	}
	public function contact()
	{
		
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('contact/body');
		$this->load->view('layout/footer');
	}

	
}

/* End of file  */
/* Location: ./application/controllers/ */