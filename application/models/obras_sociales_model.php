<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class obras_sociales_model extends CI_model {

	private $data = [
		'table'		  => 'obras_sociales',
		'pk'    	  =>'id_obra_social',
		'field_order' => 'obra_social',
		'fields_like' => ['obra_social']
	];

	public function __construct(){
		parent::__construct($this->data);
	}

}
