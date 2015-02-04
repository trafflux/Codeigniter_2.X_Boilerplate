<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/top_nav');
		$this->load->view('templates/scripts');

		$this->load->view('main/home');
		$this->load->view('main/about');
		$this->load->view('main/services');
		$this->load->view('main/information');
		$this->load->view('main/contact');
		$this->load->view('main/map');
	
		$this->load->view('templates/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */