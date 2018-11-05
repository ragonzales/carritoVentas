<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Correos extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('CorreoModel');
	}

	public function EnviarCorreoSuscripcion()
	{
		$asuntoSuscripcion = 'SUSCRIPCIÓN DOLCE SALATO';
		$correoElectronico = $this->input->post("correoElectronico");
		$mensajeCorreo = $this->CorreoModel->BuscarCorreo('1');
		$mensajeCorreoFinal = str_replace("#CORREOSUSCRIPTOR", $correoElectronico , $mensajeCorreo->correo);
		$mensajeCorreoFinal = str_replace("#DATOFECHA",  date("d/m/Y") , $mensajeCorreoFinal);
		$this->EnvioCorreo($correoElectronico,$asuntoSuscripcion,$mensajeCorreoFinal);
		echo json_encode("OK => " . $mensajeCorreoFinal);
	}

	public function EnvioCorreo($correoElectronicoFrom, $asuntoSuscripcion, $mensajeCorreo)
	{
		$this->load->library('email');		  
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		
		//Ponemos la dirección de correo que enviará el email y un nombre
		$this->email->from($correoElectronicoFrom);
		$this->email->to($this->config->item('CORREO_ELECTRONICO_TO'), 'Dolce Salato');
		$this->email->subject($asuntoSuscripcion);		
		$this->email->message($mensajeCorreo);
		$this->email->send();
	}
}