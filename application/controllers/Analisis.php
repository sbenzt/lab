<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisis extends CI_Controller {

	public function __construct(){
		parent::__construct();
		(!$this->session->userdata('sesion')) ? redirect('login') : '';
		$this->load->model('analisis_model'); 
	}


	public function analisis_(){
		$string  = $this->input->get('query');
		$analisis = $this->analisis_model->get_like($string);
		foreach($analisis as $analisis_){
            $array = array(
                'value' 		  => $analisis_->codigo_analisis.' : '.$analisis_->analisis,
                'codigo_analisis' => $analisis_->codigo_analisis,
                'nbu' => $analisis_->nbu
            );
            $data[]= $array;
        }
        echo json_encode(  [  "suggestions"  => $data  ]  );
	}
}
