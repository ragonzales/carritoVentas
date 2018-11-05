<?php
/**
* Clase CorreoModel
*/
class CorreoModel extends CI_Model
{	
	public function BuscarCorreo($IdCorreo)
	{	
		//$this->db->select('correo');
		$query = $this->db->get_where('correo', array('IdCorreo' => $IdCorreo));
		return $query->row();
	}
}
?>