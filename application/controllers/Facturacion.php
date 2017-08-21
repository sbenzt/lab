<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facturacion extends CI_Controller {

	public function index()
	{
		//data
		$js_base 	     = base_url('assets/scripts/');
		$data['scripts'] = [ $js_base  .  'informacion.js' ];



		$this->load->view('common/header_menu');
		$this->load->view('facturacion/facturacion',$data);
		$this->load->view('common/footer');
	}
}
