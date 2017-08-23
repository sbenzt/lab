<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ingresados_model extends CI_model {

	private $data = [
		'table'		  => 'ingresados',
		'pk'    	  =>'id_ingresado',
		'field_order' => 'id_ingresado',
		'fields_like' => ['id_ingresado','id_orden']
	];

	public function __construct(){
		parent::__construct($this->data);
	}

	

}
