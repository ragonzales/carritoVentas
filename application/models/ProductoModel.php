<?php
/**
* Clase ProductoModel
*/
class ProductoModel extends CI_Model
{	
	public function ListarBanners()
	{	
		$query = $this->db->get_where('promocion', array('estado' => 1));
		return $query->result();
	}

	public function ListarProductosPopulares()
	{	
		$query = $this->db->get_where('producto', array('destacado' => 1, 'estado' => 1));
		return $query->result();
	}

	public function ListarProductos($idcategoria)
	{	
		$query = $this->db->get_where('producto', array('idcategoria' => $idcategoria, 'estado' => 1));
		return $query->result();
	}

	public function BuscarProductoProporciones($IdProducto)
	{	
		$query = $this->db->get_where('proporcionproductos', array('IdProducto' => $IdProducto));
		return $query->result();
	}

	public function BuscarProducto($IdProducto)
	{	
		$query = $this->db->get_where('producto', array('IdProducto' => $IdProducto));
		return $query->row();
	}

	public function BuscarProporcion($IdProporcion)
	{	
		$query = $this->db->get_where('proporcionproductos', array('idproductoproporcion' => $IdProporcion));
		return $query->row();
	}
}
?>