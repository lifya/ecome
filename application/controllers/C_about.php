<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_about extends CI_Controller {

	public function index()
	{
		$this->load->view('element/header');
		$this->load->view('content/elin');
		$this->load->view('element/footer');
	}

	public function pipit()
	{
		$this->load->view('content/pipit.php');
	}

	public function lifya()
	{
		$this->load->view('content/lifya.php');
	}

	public function yulin()
	{
		$this->load->view('content/yulin.php');
	}

}
