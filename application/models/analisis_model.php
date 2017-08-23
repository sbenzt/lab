<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class analisis_model extends CI_model {

	private $data = [
		'table'		  => 'analisis',
		'pk'    	  =>'codigo_analisis',
		'field_order' => 'analisis',
		'fields_like' => ['codigo_analisis','analisis']
	];

	public function __construct(){
		parent::__construct($this->data);
	}

}
