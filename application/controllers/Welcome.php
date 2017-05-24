<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function first(){
		$this->load->view('first');
	}
	public function add(){
		$this->load->view('add');
	}
	public function table(){
		$this->load->model("Codeimodel");
		$records = $this->Codeimodel->getRecords();
		$this->load->view('table',['records'=>$records]);
	}
	public function users(){
		$this->load->model("Codeimodel");
		$records = $this->Codeimodel->getv();
		$this->load->view('users',['records'=>$records]);
	}
	public function homme(){
		$this->load->view("homme");
	}
	public function comment(){
		$this->load->view("comment");
	}
}
