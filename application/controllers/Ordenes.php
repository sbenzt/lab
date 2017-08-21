<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordenes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		(!$this->session->userdata('sesion')) ? redirect('login') : '';
		$this->load->model('usuarios_model'); 
		$this->load->model('ordenes_model'); 
		$this->load->model('medicos_model'); 
	}

	public function index()
	{


        $usuarios = $this->usuarios_model->get_id($this->session->userdata('id_usuario'));
        foreach ($usuarios as $usuario) {
        	$data['ayuda'] = $usuario->ayuda;
        }

        $data['protocolo'] = $this->ordenes_model->get_max('protocolo') + 1;
		$data['scripts'] = [ base_url('assets/scripts/')  .  'ordenes.js' ];
		//$this->d($t);
		$this->load->view('common/header_menu');
		$this->load->view('ordenes/ingresar_ordenes',$data);
		$this->load->view('common/footer');
	}

	public function test(){
		$string  = $this->input->get('query');
		$medicos = $this->medicos_model->get_like($string);
		foreach($medicos as $medico){
            $array = array(
                'value'        => $medico->medico,
            );
            $data[]= $array;
        }
        echo json_encode(  [  "suggestions"  => $data  ]  );
	}

	public function protocolo(){
		$protocolo = $this->input->get('protocolo');
		$result    = $this->ordenes_model->get(['protocolo' => $protocolo]);
		echo ($result) ? $protocolo : 0;	
	}
}
