<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordenes extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header_menu');
		$this->load->view('ordenes/ingresar_ordenes');
		$this->load->view('common/footer');
	}
}
