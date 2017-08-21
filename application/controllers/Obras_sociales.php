<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obras_sociales extends CI_Controller {

	public function __construct(){
		parent::__construct();
		(!$this->session->userdata('sesion')) ? redirect('login') : '';
		$this->load->model('obras_sociales_model'); 
	}

	public function obra_social(){
		$string  = $this->input->get('query');
		$obras_sociales = $this->obras_sociales_model->get_like($string);
		foreach($obras_sociales as $obra_social){
            $array = array(
                'value'  => $obra_social->obra_social,
            );
            $data[]= $array;
        }
        echo json_encode(  [  "suggestions"  => $data  ]  );
	}

	
}
