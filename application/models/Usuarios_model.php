<?php
class Usuarios_model extends CI_Model {

  function __construct(){
    $this->load->database();
  }

  function login($usuario, $clave){
    $resp = $this->db->query('SELECT usuario, nombre, clave FROM usuario
                              WHERE usuario ="'.$usuario.'"')->result_array();
    if($resp){
      if(password_verify($clave, $resp[0]['clave'])){
        return $resp[0]['nombre'];
      }
    }
    return false;
  }

  function usuarioNuevo($n, $u, $c){
    $pass = password_hash($c, PASSWORD_DEFAULT, ['cost' => 12]);
    $values = '("'.$n.'", "'.$u.'", "'.$pass.'")';
    if($this->db->query('INSERT INTO usuario (usuario, nombre, clave) VALUES '.$values.';')){
      return true;
    }
    return false;
  }

}
