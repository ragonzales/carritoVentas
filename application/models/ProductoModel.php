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

	
	public function ListarProductosPopulares($limit,$start)
	{	
		$this->db->limit($limit, $start);
		$query = $this->db->get_where('producto', array('destacado' => 1, 'estado' => 1));
		return $query->result();
	}
	
	/*
	public function ListarProductosPopulares()
	{	
		$query = $this->db->get_where('producto', array('destacado' => 1, 'estado' => 1));
		return $query->result();
	}
	*/
	
	public function ListarProductos($idcategoria,$limit,$start)
	{	
		$this->db->limit($limit, $start);
		$query = $this->db->get_where('producto', array('idcategoria' => $idcategoria, 'estado' => 1));		
		return $query->result();
	}
	
	/*
	public function ListarProductos($idcategoria)
	{	
		$query = $this->db->get_where('producto', array('idcategoria' => $idcategoria, 'estado' => 1));		
		return $query->result();
	}
	*/

	public function BuscarProductoProporciones($IdProducto)
	{		
		$this->db->order_by("proporcion desc");
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
	
	public function BuscarProductos_Nombre($nombreProducto)
	{	
		$this->db->or_like('nombre', $nombreProducto);
		$query = $this->db->get('producto');	
		return $query->result();	
	}

	public function BuscarProductos_XProporcion($IdProporcion)
	{	
		//$query = $this->db->query('SELECT * FROM  producto p INNER JOIN proporcionproductos pp ON p.idproducto = pp.idproducto WHERE pp.idproductoproporcion = "' + $IdProporcion + "'");
		// return $query->result();
		
		$this->db->select('producto.*');
		$this->db->from('proporcionproductos');
		$this->db->join('producto', 'producto.IdProducto = proporcionproductos.IdProducto');
		$this->db->where('proporcionproductos.idproductoproporcion', $IdProporcion);
		$query = $this->db->get();
		return $query->row();
	}

}
?>