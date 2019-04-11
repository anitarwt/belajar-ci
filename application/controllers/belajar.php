<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {

public function __construct()
{
	parent::__construct();

	$this->load->model('mbelajar');
	//Do your magic here
}
	public function index()
	{
	$this->load->view('admin/home');
	}
	
}

/* End of file belajar.php */
/* Location: ./application/controllers/belajar.php */