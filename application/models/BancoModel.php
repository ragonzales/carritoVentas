<?php
/**
* Clase BancoModel
*/
class BancoModel extends CI_Model
{
	public function ListarBancos()
	{	
		$query = $this->db->get_where('banco', array('estado' => 1));
		return $query->result();
	}

	public function BuscarBanco($IdBanco)
	{	
		$query = $this->db->get_where('banco', array('IdBanco' => $IdBanco));
		return $query->row();
	}
}
?>