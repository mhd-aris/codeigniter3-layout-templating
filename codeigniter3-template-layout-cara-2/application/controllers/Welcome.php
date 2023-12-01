<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->template->load('welcome_message','home');
		}
		public function about(){
		$this->template->load('welcome_message','about');
		}
}
