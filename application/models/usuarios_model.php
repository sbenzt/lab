<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios_model extends CI_model {

	private $data = [
		'table'		  => 'usuarios',
		'pk'    	  =>'id_usuario',
		'field_order' => 'apellido,nombre',
		'fields_like' => ['nombre','apellido','mail','id_tipo_usuario']
	];

	public function __construct(){
		parent::__construct($this->data);
	}

}
