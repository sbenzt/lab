<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordenes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		(!$this->session->userdata('sesion')) ? redirect('login') : '';
		$this->load->model('usuarios_model'); 
		$this->load->model('ordenes_model'); 
		$this->load->model('medicos_model'); 
		$this->load->model('ingresados_model'); 
		$this->load->model('caja_model'); 
	}

	public function index()
	{


        $usuarios = $this->usuarios_model->get_id($this->session->userdata('id_usuario'));
        foreach ($usuarios as $usuario) {
        	$data['ayuda'] = $usuario->ayuda;
        }

        $data['protocolo'] = $this->ordenes_model->get_max('protocolo') + 1;
		$data['scripts'] = [ base_url('assets/scripts/')  .  'ordenes.js' ];
		$this->load->view('common/header_menu');
		$this->load->view('ordenes/ingresar_ordenes',$data);
		$this->load->view('common/footer');
	}


	public function nuevo(){
		$data_orden    = $this->input->post('data_orden');
		$data_analisis = ($this->input->post('data_analisis'));
		$data_caja     = ($this->input->post('data_caja'));

		
		//Si el medico existe    -> guardar id
		//Si el medico no existe -> insertar y recuperar ultimo id
		$result = $this->medicos_model->get(['medico' => $data_orden['medico'] ]);
		if(count($result) == 1){
			foreach ($result as $value)
				$id_medico = $value->id_medico;
		}
		else{
			$this->medicos_model->insert(['medico' => $data_orden['medico'] ]);
			$id_medico = $this->db->insert_id();
		}

		//Quito el nombre del medico que ya no hace falta y reasigno valores
		unset($data_orden['medico']);
		$data_orden['id_medico']  = $id_medico;
		$data_orden['fecha']      = date('Y-m-d');
		$data_orden['id_usuario'] = 1;


		//Si se inserta la orden -> insertar analisis en ingresados
		$result   = $this->ordenes_model->insert($data_orden);
		$id_orden = $this->db->insert_id();
		if($result){
			foreach ($data_analisis as $value) {

				$autorizado = ($value[1] == 'true') ? true : false;

				$data = [
					'id_orden'        => $id_orden,
					'codigo_analisis' => $value[0],
					'autorizado'      => $autorizado
				];
				$result = $this->ingresados_model->insert($data);
			}

		}

		//Si total > 0 -> insertar en caja
		if($result){
			if($data_caja['monto'] > 0 ){
				$data_caja['id_usuario'] = 1;
				$result = $this->caja_model->insert($data_caja);
			} 
		}

		echo $result;
		
	}

	/**********************************************/
	/* METODOS TIPO AJAX
	***********************************************/

	public function protocolo_ajax(){
		$protocolo = $this->input->get('protocolo');
		$result    = $this->ordenes_model->get(['protocolo' => $protocolo]);
		echo ($result) ? $protocolo : 0;	
	}

	public function orden_ajax(){
		
	}
}
