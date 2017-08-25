<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resultados extends CI_Controller {

	public function __construct(){
		parent::__construct();
		(!$this->session->userdata('sesion')) ? redirect('login') : '';
		$this->load->model('usuarios_model'); 
		$this->load->model('ordenes_model'); 
		$this->load->model('medicos_model'); 
		$this->load->model('ingresados_model'); 
		$this->load->model('caja_model'); 
		$this->load->model('obras_sociales_model'); 
		$this->load->model('analisis_model'); 
		$this->load->model('joins_model'); 
		$this->load->model('ingresados_campos_model'); 
	}

	public function busqueda()
	{

		//muestra la ayuda
		$usuarios = $this->usuarios_model->get_id($this->session->userdata('id_usuario'));
        foreach ($usuarios as $usuario) 
        	$data['ayuda'] = $usuario->ayuda;
        echo $this->input->post('busqueda');
        if(!empty($this->input->post('busqueda'))){
        	if(!empty($this->input->post('string')))
        		$ordenes =  $this->ordenes_model->get_like($this->input->post('string'));
        	else
        		$ordenes =  $this->ordenes_model->get_like($this->input->post('date'));

        	$data['resultado'] = 'Resultado de la busqueda';
        }
        else{
        	//Ultimas ordenes : GET(array de condicion, ordenar por, asc o desc, limite)
        	$ordenes =  $this->ordenes_model->get([],'fecha','desc',10);
        	$data['resultado'] = 'Listado de las ultimas ordenes ingresadasS';
        }
        

        //especie de join
        foreach ($ordenes as $orden ) {

        	$obras = $this->obras_sociales_model->get(['id_obra_social' => $orden->id_obra_social]);
        	foreach ($obras as $obra) {
        		
        		$array_ordenes[] = [
        	 	'id_orden'       => $orden->id_orden,
        	 	'protocolo'      => $orden->protocolo,
        	 	'ayn' 		     => $orden->apellido_paciente.' '.$orden->nombre_paciente,
        	 	'norden'   		 => $orden->numero_orden,
        	 	'nafiliado'		 => $orden->numero_afiliado,
        	 	'fecha'		 	 => date_format(date_create($orden->fecha), 'd/m/Y'),
        	 	'obra_social'    => $obra->obra_social
        	    ];
        	}
        }

        $data['ordenes'] = (isset($array_ordenes)) ? $array_ordenes : [];

		$this->load->view('common/header_menu');
		$this->load->view('resultados/buscar',$data);
		$this->load->view('common/footer');
	}

	public function protocolo($protocolo = null){
		if(is_null($protocolo))
			redirect('buscar_orden');

		$ordenes = $this->ordenes_model->get(['protocolo' => $protocolo]);
		foreach ($ordenes as $orden ) {
			//para buscar en ingresados
			$id_orden = $orden->id_orden;

        	$obras = $this->obras_sociales_model->get(['id_obra_social' => $orden->id_obra_social]);
        	foreach ($obras as $obra) {
        		
        		$array_ordenes[] = [
        	 	'id_orden'       => $orden->id_orden,
        	 	'protocolo'      => $orden->protocolo,
        	 	'ayn' 		     => $orden->apellido_paciente.' '.$orden->nombre_paciente,
        	 	'norden'   		 => $orden->numero_orden,
        	 	'nafiliado'		 => $orden->numero_afiliado,
        	 	'fecha'		 	 => date_format(date_create($orden->fecha), 'd/m/Y'),
        	 	'obra_social'    => $obra->obra_social
        	    ];
        	}
        }

        $data['ordenes'] = (isset($array_ordenes)) ? $array_ordenes : redirect('buscar_orden');

        //Analisis ingresados
        $ingresados = $this->ingresados_model->get(['id_orden' => $id_orden]);

        foreach ($ingresados as $ingresado ) {

        	$analisis_ = $this->analisis_model->get(['codigo_analisis' => $ingresado->codigo_analisis]);
        	foreach ($analisis_ as $analisis) {
        		
        		$array_ingresados[] = [
        	 	'id_ingresado'       => $ingresado->id_ingresado,
        	 	'id_orden'      	 => $ingresado->id_orden,
        	 	'analisis' 		     => $analisis->analisis,
        	 	'codigo_analisis'    => $ingresado->codigo_analisis,
        	 	'autorizado'   		 => $ingresado->autorizado,
        	    ];
        	}
        }

        $data['ingresados'] = (isset($array_ingresados)) ? $array_ingresados : [];
        //$this->d($data['ingresados']);
        $data['scripts'] = [ base_url('assets/scripts/')  .  'ingresar_resultados.js' ];

		$this->load->view('common/header_menu');
		$this->load->view('resultados/ingresar_resultados',$data);
		$this->load->view('resultados/resultados_modal');
		$this->load->view('common/footer');
	}

	public function resultados_ajax(){
		$id_ingresado    = $this->input->get('id_ingresado');
		$codigo_analisis = $this->input->get('codigo_analisis');

		$campos     = $this->joins_model->analisis_campos($codigo_analisis);
		$ingresados = $this->joins_model->ingresados_campos($id_ingresado);

		//Si ingresados > 0 -> tiene resultados cargados -> update
		//Sino devuelve los campos de analisis para rellenar -> insert
		if(count($ingresados) > 0){
			
			foreach ($ingresados as $ingresado) {
				$array_campos[] = [
					'operacion' 	   => 'actualizar',
					'id_campo'         => $ingresado->id_campo,
					'nombre_campo'     => $ingresado->nombre_campo,
					'valor_obtenido'   => $ingresado->valor_obtenido,
					'valor_referencia' => $ingresado->valor_referencia,
					'unidad_medida'    => $ingresado->unidad_medida,
				];
			}
			
		}
		else{
			foreach ($campos as $campo) {
				$array_campos[] = [
					'operacion' 	   => 'insertar',
					'id_campo'         => $campo->id_campo,
					'nombre_campo'     => $campo->nombre_campo,
					'valor_obtenido'   => null,
					'valor_referencia' => $campo->valor_referencia,
					'unidad_medida'    => $campo->unidad_medida,
				];
			}
		}

		//$this->d($array_campos);
		echo json_encode($array_campos);
	}

	public function insertar(){
		$resultados = $this->input->post('resultados');
		$result = 0;
		foreach ($resultados as $resultado) {
			 $result = $result + $this->ingresados_campos_model->insert($resultado).' ';
		}
		echo $result;
	}

	public function actualizar(){
		$resultados = $this->input->post('resultados');
		$result = 0;
		foreach ($resultados as $resultado) {
			$result = $result + $this->ingresados_campos_model->update($resultado['id_ingresado'],$resultado['id_campo'],$resultado).' ';
		}
		echo $result;
	}


}
