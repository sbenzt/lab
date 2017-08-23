<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		(!$this->session->userdata('sesion')) ? redirect('login') : '';
		$this->load->model('usuarios_model'); 
		$this->load->model('ordenes_model'); 
		$this->load->model('medicos_model'); 
	}

	public function medico(){
		$string  = $this->input->get('query');
		$medicos = $this->medicos_model->get_like($string);
		foreach($medicos as $medico){
            $array = array(
                'value'     => $medico->medico,
                'id_medico' => $medico->id_medico
            );
            $data[]= $array;
        }
        echo json_encode(  [  "suggestions"  => $data  ]  );
	}

	
}
