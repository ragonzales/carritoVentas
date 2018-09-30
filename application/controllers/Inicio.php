<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('layout/banner');
		$this->load->view('inicio');
		$this->load->view('layout/footer');
	}
}
