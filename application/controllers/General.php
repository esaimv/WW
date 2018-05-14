<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->model('congresos');
		$datos['congresos'] = $this->congresos->getCongresos();
		$this->load->view('template/general_template', $datos);
	}
	public function congreso($congreso, $modulo = 'home'){
		echo $this->session->congreso.'---(Congreso de la sesión)<br>';
		echo $congreso.'---(Congreso al que se accedio)<br>';
		if($this->session->congreso != $congreso){
			// PARA CUANDO CAMBIAS ENTRE CONGRESO CON SESION INICIADA //
			unset($this->session->congreso);
			$this->session->congreso = $congreso;
		}
		$this->load->model('congresos');
		$congreso = $this->congresos->getCongreso($congreso);
		$datos = $congreso[0];
		if($this->session->usuario_nombre &&
			 $this->session->usuario_usuario){
			$datos['usuario_nombre'] = $this->session->usuario_nombre;
			$datos['usuario_usuario'] = $this->session->usuario_usuario;
		}
		else{
			$datos['usuario_nombre'] = false;
			$datos['usuario_usuario'] = false;
		}
		if(empty($this->session->errores)){
			$datos['errores'] = false;
		}else{
			$datos['errores'] = $this->session->errores;
		}
		$datos['modulo'] = $modulo;
		$this->load->view('congreso/template/congreso_template', $datos);
	}

}
