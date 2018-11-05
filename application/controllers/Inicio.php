<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
		
	/*
	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	}
	*/

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('layout/banner');
		$this->load->view('inicio');
		$this->load->view('layout/footer');
	}
}
