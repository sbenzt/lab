<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class medicos_model extends CI_model {

	private $data = [
		'table'		  => 'medicos',
		'pk'    	  =>'id_medico',
		'field_order' => 'medico',
		'fields_like' => ['id_medico','medico']
	];

	public function __construct(){
		parent::__construct($this->data);
	}

	

}
