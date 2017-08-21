<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('usuarios_model');
	}


	public function index()
	{
		($this->session->userdata('sesion')) ? redirect('ordenes') : '';
		
		function p($data){
			echo '<pre>';
			print_r($data);
			echo '</pre>';
		}

		$js_base 	     = base_url('assets/scripts/');
		$data['scripts'] = [ $js_base  .  'informacion.js' ];


		$this->load->view('usuarios/login',$data);
	}

	//***************************************************************************************
    //  METODO PUBLICO QUE VALIDA LAS CREDENCIALES DEL USUARIO Y CREA LA SESION DEL MISMO
    //***************************************************************************************

    public function login(){

        $this->validar_usuario();
        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $user    = $this->input->post('user');
            $password = $this->input->post('password');
            $result     = $this->usuarios_model->get(['usuario' => $user, 'contrasena' => ($password)]);
            
            if($result != FALSE){
                foreach ($result as $usuario){
                    $data['id_usuario']      = $usuario->id_usuario;
                    $data['nombre']          = $usuario->nombre . ' ' . $usuario->apellido;
                    $data['id_tipo_usuario'] = $usuario->id_tipo_usuario;
                    $data['sesion']          = TRUE;
                }
                //setea los datos que se almacenan en la cookie
                $this->session->set_userdata($data);
                redirect('ordenes');
            }
            else{
                $data['login_failed'] = 'Usuario o Contraseña incorrecta';
                $this->load->view('usuarios/login',$data);
            }
        }

    }

	public function logout()
	{
		$this->session->sess_destroy();
        redirect('login');
	}

	public function nuevo()
	{
		//data
		$js_base 	     = base_url('assets/scripts/');
		$data['scripts'] = [ $js_base  .  'informacion.js' ];

		$data = [
			'usuario' => 'ggggx',
			'nombre' => 'Magditax',
			'apellido' => 'miauuu',
			'mail' => 'ccccccc',
			'id_tipo_usuario' => 1
		];

		//echo   $this->db->_error_message(); 
		try {
			throw new ErrorException('no',3);
			$this->usuarios_model->insert($data);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
		

		$this->load->view('common/header_menu');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('common/footer');
	}

	public function actualizar()
	{
		//data
		$js_base 	     = base_url('assets/scripts/');
		$data['scripts'] = [ $js_base  .  'informacion.js' ];



		$this->load->view('common/header_menu');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('common/footer');
	}

	public function eliminar()
	{
		//data
		$js_base 	     = base_url('assets/scripts/');
		$data['scripts'] = [ $js_base  .  'informacion.js' ];



		$this->load->view('common/header_menu');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('common/footer');
	}

	//***************************************************************************************
    //  METODO PRIVADO QUE UTLIZA LA LIBRERIA form_validation DEL FRAMEWORK PARA LA VALUDACÍON
    //  DE LOS CAMPOS INGRESADOS POR EL USUARIO AL INICIAR SESIÓN
    //***************************************************************************************

    private function validar_usuario(){
        $this->form_validation->set_rules('user', 'Nombre de usuario', 'min_length[6]|alpha_numeric|trim');
        $this->form_validation->set_rules('password', 'Contraseña', 'min_length[6]|alpha_numeric');
        $this->form_validation->set_message('min_length','El campo debe contener al menos 6 caracteres');
        $this->form_validation->set_message('alpha_numeric','Solo se permiten números y letras');
        $this->form_validation->set_message('trim','el campo no debe contener espacios');
    }


}
