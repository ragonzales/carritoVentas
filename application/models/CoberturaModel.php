<?php
/**
* Clase CoberturaModel
*/
class CoberturaModel extends CI_Model
{	
	public function ListarCoberturas()
	{	
		$query = $this->db->get_where('cobertura', array('activo' => 1));
		return $query->result();
	}
}
?>