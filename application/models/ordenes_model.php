<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ordenes_model extends CI_model {

	private $data = [
		'table'		  => 'ordenes',
		'pk'    	  =>'id_orden',
		'field_order' => 'fecha,apellido_paciente,nombre_paciente',
		'fields_like' => ['protocolo','nombre_paciente','apellido_paciente','fecha','id_obra_social','id_medico','id_usuario']
	];

	public function __construct(){
		parent::__construct($this->data);
	}

	public function get_max($column){
		if(is_null($column) || empty($column))
			return false;

		$this->db->select_max($column);
    	$result =  $this->db->get('ordenes')->result();
    	foreach ($result as $value) {
    		if(empty($value->protocolo) || is_null($value->protocolo))
    			return 0;
    		else
    			return $value->protocolo;
    	}

	}

}
