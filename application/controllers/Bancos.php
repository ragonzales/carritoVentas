<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bancos extends CI_Controller {
    
    function __construct()
	{
		parent::__construct();
		$this->load->model('BancosModel');	
	}
	
	public function ListarBancos(){
		$resultado = $this->BancosModel->ListarBancos();
		echo json_encode($resultado);
	}

	public function BuscarBanco()
	{
		$IdBanco = $this->input->post("IdBanco");
		$resultado = $this->BancosModel->BuscarBanco($IdBanco);
		echo json_encode($resultado);
	}
}