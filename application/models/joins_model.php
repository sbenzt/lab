<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class joins_model extends CI_model {

	public function __construct(){
		parent::__construct();
	}

	/************************************************
	/ 
	************************************************/
	public function analisis_campos($codigo_analisis = null){
		if(is_null($codigo_analisis))
			return false;

		$this->db->select('*');
		$this->db->from('analisis a');
		$this->db->join('analisis_campos ac', 'a.codigo_analisis = ac.codigo_analisis');
		$this->db->join('campos c', 'c.id_campo = ac.id_campo');
		$this->db->where('a.codigo_analisis',$codigo_analisis);
		return $this->db->get()->result();
	}

	public function ingresados_campos($id_ingresado = null){
		if(is_null($id_ingresado))
			return false;

		$this->db->select('*');
		$this->db->from('ingresados i');
		$this->db->join('ingresados_campos ic', 'i.id_ingresado = ic.id_ingresado');
		$this->db->join('campos c', 'c.id_campo = ic.id_campo');
		$this->db->where('i.id_ingresado',$id_ingresado);
		return $this->db->get()->result();
	}

}
