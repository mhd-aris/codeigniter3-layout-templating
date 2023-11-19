<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('_partials/head');
		$this->load->view('page/home');
		$this->load->view('_partials/footer');
	}
}
