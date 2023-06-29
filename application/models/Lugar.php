<?php
  class Lugar extends CI_Model
  {
	function __construct()
	{
  	parent::__construct();
	}
	//Funcion para insertar un lugar en MYSQL
	function insertar($datos){
    	return $this->db
            	->insert("lugar",
            	$datos);
	}
	//FUNCION PARA CONSULTAR LUGAR
	function obtenerTodos(){
  	$listadoLugares=
  	$this->db->get("lugar");
  	if($listadoLugares
      	->num_rows()>0){//si hay tados
        	return $listadoLugares->result();

      	}else{
        	return false;
      	}
	}
  }//Cierre de la clase

 ?>
