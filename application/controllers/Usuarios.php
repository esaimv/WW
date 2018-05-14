<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
	}


  	function login($congreso){
  		$this->session->errores = false;
      $this->form_validation->set_rules('nombre', 'Nombre de usuario', 'required|min_length[2]');
  		$this->form_validation->set_rules('clave', 'Contraseña', 'required|min_length[6]');
      if ($this->form_validation->run() == FALSE){
         $this->congreso($congreso);
       }else{
  			 $this->load->model('usuarios_model');
  			 $nom_us = $this->usuarios_model->login($this->input->post('nombre'), $this->input->post('clave'));
  			 var_dump ($nom_us);
  			 if($nom_us){
  				 $this->session->usuario_nombre = $nom_us;
  				 $this->session->usuario_usuario = $this->input->post('nombre');
  			 }else{
  				 $this->session->errores = 'El usuario y/o la contraseña no son correctos.';
  			 }
  			 header('Location: /congreso/'.$congreso);
       }
    }

		function logout($congreso){
			$this->session->errores = false;
			unset($this->session->congreso);
			$this->session->sess_destroy();
			header('Location: /congreso/'.$congreso);
		}

		function nuevo($congreso){
			$nom = $this->input->post('nombre_usuario');
			$usr = $this->input->post('usuario_usuario');
			$clv = $this->input->post('clave_usuario');
			$this->load->model('usuarios_model');
			if($this->usuarios_model->usuarioNuevo($nom, $usr, $clv)){
				header('Location: /congreso/'.$congreso);
			}
		}


}
