<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resultados extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header_menu');
		$this->load->view('resultados/buscar_paciente');
		$this->load->view('common/footer');
	}

	public function protocolo($protocolo = null){
		if(is_null($protocolo))
			redirect('ingresar_resultados');

		$this->load->view('common/header_menu');
		$this->load->view('resultados/ingresar_resultados');
		$this->load->view('resultados/resultados_modal');
		$this->load->view('common/footer');
	}


}
