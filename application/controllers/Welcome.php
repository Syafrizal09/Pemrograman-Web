<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_datadiri','mself');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
		
	{
		$data=[
				'data'=>$this->mself->getdatadiri()
		];
		// echo json_encode($data);
		// echo $data['data']->nama;

		// $this->load->view("login_form");
		$this->load->view('utama',$data);
	}
		public function home_dua(){
			
		$this->load->view('template/header');
		$this->load->view('template/content');
		$this->load->view('template/footer');	
		}
	
		
	
}
