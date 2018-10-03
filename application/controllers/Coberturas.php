<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coberturas extends CI_Controller {
    
    function __construct()
	{
		parent::__construct();
		$this->load->model('CoberturaModel');	
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('layout/banner');
		$this->load->view('inicio');
		$this->load->view('layout/footer');
	}
   
	public function ListarCoberturas(){
		$resultado = $this->CoberturaModel->ListarCoberturas();
		echo json_encode($resultado);
	}
}