<?php
  class Estudiante extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar($datos){
        return $this->db->insert("estudiante",$datos);
    }
    //funcion para consultar instructores
    function obtenerTodos(){
      $listadoEstudiantes=$this->db->get("estudiante");
      if($listadoEstudiantes->num_rows()>0){//si hay datos
      return $listadoEstudiantes->result();
    }else{//no hay datos
      return false;
      }
    }
    //borrar Instructores
    function borrar($id_ins){
      //delete from instructor where id_ins=1;
      $this->db->where("id_ins",$id_ins);
      return $this->db->delete("estudiante");
    }
  }//Cierre de la clase

 ?>
