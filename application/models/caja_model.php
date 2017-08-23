<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class caja_model extends CI_model {

	private $data = [
		'table'		  => 'caja',
		'pk'    	  =>'id_caja',
		'field_order' => 'fecha',
		'fields_like' => ['fecha','monto','concepto']
	];

	public function __construct(){
		parent::__construct($this->data);
	}

	

}
