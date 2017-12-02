<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_portfolio extends CI_Controller {

	public function index()
	{
		$this->load->view('element/header');
		$this->load->view('content/portfolio5');
		$this->load->view('element/footer');
	}
}
