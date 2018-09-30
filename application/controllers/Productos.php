<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
    
    function __construct()
	{
		parent::__construct();
		$this->load->model('ProductoModel');	
	}
   
	public function ListarProductos(){
		$categoria = $this->input->post("categoria");
		$resultado = $this->ProductoModel->ListarProductos($categoria);
		echo json_encode($resultado);
	}

	public function ListarProductosPopulares(){
		$resultado = $this->ProductoModel->ListarProductosPopulares();
		echo json_encode($resultado);
	}

	public function ListarBanners(){
		$resultado = $this->ProductoModel->ListarBanners();
		echo json_encode($resultado);
	}

	public function BuscarProducto()
	{
		$IdProducto = $this->input->post("IdProducto");
		$resultado = $this->ProductoModel->BuscarProducto($IdProducto);
		echo json_encode($resultado);
	}

	public function BuscarProductoProporciones()
	{
		$IdProducto = $this->input->post("IdProducto");
		$resultado = $this->ProductoModel->BuscarProductoProporciones($IdProducto);
		echo json_encode($resultado);
	}
}