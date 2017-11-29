<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

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
	public function index(){
		$this->cargar_vista('inicio');
	}

	public function catalogo(){
		$this->cargar_vista('catalogo');
	}

	public function materiales(){
		$this->cargar_vista('materiales');
	}

	public function contacto(){
		$this->cargar_vista('contacto');
	}

	public function login(){
		$this->cargar_vista('login');
	}


	public function cargar_vista($vista){
		$datos['vista'] = $vista;
		$this->load->view('template', $datos);
	}
}
