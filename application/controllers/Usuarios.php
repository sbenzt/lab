<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function index()
	{
		//data
		$js_base 	     = base_url('assets/scripts/');
		$data['scripts'] = [ $js_base  .  'informacion.js' ];



		$this->load->view('common/header_menu');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('common/footer');
	}

	public function login()
	{
		//data
		$js_base 	     = base_url('assets/scripts/');
		$data['scripts'] = [ $js_base  .  'informacion.js' ];



		$this->load->view('common/header_menu');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('common/footer');
	}

	public function logout()
	{
		//data
		$js_base 	     = base_url('assets/scripts/');
		$data['scripts'] = [ $js_base  .  'informacion.js' ];



		$this->load->view('common/header_menu');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('common/footer');
	}

	public function nuevo()
	{
		//data
		$js_base 	     = base_url('assets/scripts/');
		$data['scripts'] = [ $js_base  .  'informacion.js' ];



		$this->load->view('common/header_menu');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('common/footer');
	}

	public function actualizar()
	{
		//data
		$js_base 	     = base_url('assets/scripts/');
		$data['scripts'] = [ $js_base  .  'informacion.js' ];



		$this->load->view('common/header_menu');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('common/footer');
	}

	public function eliminar()
	{
		//data
		$js_base 	     = base_url('assets/scripts/');
		$data['scripts'] = [ $js_base  .  'informacion.js' ];



		$this->load->view('common/header_menu');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('common/footer');
	}

	private function validar(){

	}


}
