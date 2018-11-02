<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('ProductoModel');
	}

	/*REDIRECCIONES A VISTAS */
	/*POSTRES*/
	public function Postres()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('layout/banner');
		$this->load->view('producto/Postres');
		$this->load->view('layout/footer');
	}

	/*BOCADITOS*/
	public function Bocaditos()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('layout/banner');
		$this->load->view('producto/Bocaditos');
		$this->load->view('layout/footer');
	}

	/*CUPCKES*/
	public function Cupckes()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('layout/banner');
		$this->load->view('producto/Cupckes');
		$this->load->view('layout/footer');
	}

	/*COMBOS*/
	public function Combos()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('layout/banner');
		$this->load->view('producto/Combos');
		$this->load->view('layout/footer');
	}

	/*FESTIVO*/
	public function Festivo()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('layout/banner');
		$this->load->view('producto/Festivo');
		$this->load->view('layout/footer');
	}

	public function ListarProductos(){
		$categoria = $this->input->post("categoria");
		$limit = $this->input->post("limit");
		$start = $this->input->post("start");
		$resultado = $this->ProductoModel->ListarProductos($categoria,$limit,$start);
		echo json_encode($resultado);
	}

	
	public function ListarProductosPopulares(){
		$limit = $this->input->post("limit");
		$start = $this->input->post("start");
		$resultado = $this->ProductoModel->ListarProductosPopulares($limit,$start);
		echo json_encode($resultado);
	}
	
	/*
	public function ListarProductosPopulares(){
		// $limit = $this->input->post("limit");
		// $start = $this->input->post("start");
		$resultado = $this->ProductoModel->ListarProductosPopulares();
		echo json_encode($resultado);
	}
	*/

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

	public function BuscarProporcion()
	{
		$IdProporcion = $this->input->post("IdProporcion");
		$resultado = $this->ProductoModel->BuscarProporcion($IdProporcion);
		echo json_encode($resultado);
	}

	public function BuscarProductoProporciones()
	{
		$IdProducto = $this->input->post("IdProducto");
		$resultado = $this->ProductoModel->BuscarProductoProporciones($IdProducto);
		echo json_encode($resultado);
	}

	public function BuscarProductos_Nombre()
	{
		$nombreProducto = $this->input->post("nombreProducto");
		$resultado = $this->ProductoModel->BuscarProductos_Nombre($nombreProducto);
		echo json_encode($resultado);
	}

	public function BuscarProductos_XProporcion()
	{
		$IdProporcion = $this->input->post("IdProporcion");
		$resultado = $this->ProductoModel->BuscarProductos_XProporcion($IdProporcion);
		echo json_encode($resultado);
	}
}