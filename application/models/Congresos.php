<?php
class Congresos extends CI_Model {

  function __construct(){
    $this->load->database();
  }

  public function getCongresos(){
    $this->congresos = $this->db->get('congreso')->result_array();
    foreach ($this->congresos as $key => $value) {
      $congresos[$value['nombre']] = $value;
    }
    return $congresos;
  }

  public function getCongreso($nombre){
    if(empty($congresos)){
      $this->db->where('nombre', $nombre);
      $congreso = $this->db->get('congreso')->result_array();
    }
    return $congreso;
  }


}
