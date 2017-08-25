<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ingresados_campos_model extends CI_model {

	private $data = [
		'table'		  => 'ingresados_campos',
		'pk'    	  => 'id_campo',
		'fields_like' => ['id_ingresado','id_campo']
	];

	public function __construct(){
		parent::__construct($this->data);
	}

	//metodo sobreescrito con tres parametros 
	public function update($id_ingresado = null,$id_campo = null,$data = null){
		if(is_null($id_ingresado) || is_null($id_campo) || is_null($data))
			return false;

		$this->db->where('id_ingresado', $id_ingresado);
		$this->db->where('id_campo', $id_campo);
		$this->db->update('ingresados_campos', $data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	

}
