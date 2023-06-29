<?php
  class Alumno extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar($datos){
        return $this->db->insert("alumno",$datos);
    }
    //funcion para consultar instructores
    function obtenerTodos(){
      $listadoAlumnos=$this->db->get("alumno");
      if($listadoAlumnos->num_rows()>0){//si hay datos
      return $listadoAlumnos->result();
    }else{//no hay datos
      return false;
      }
    }
    //borrar Instructores
    function borrar($id_ins){
      //delete from instructor where id_ins=1;
      $this->db->where("id_ins",$id_ins);
      return $this->db->delete("alumno");
    }
  }//Cierre de la clase

 ?>
