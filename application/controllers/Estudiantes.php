<?php

    class Estudiantes extends CI_Controller
    {
        function __construct()
        {
          parent::__construct();
          //Cargar modelo
          $this->load->model('Estudiante');
        }

    public function index(){
      $data['estudiantes']=$this->Estudiante->obtenerTodos();
      $this->load->view('header');
      $this->load->view('estudiantes/index',$data);
      $this->load->view('footer');

    }
    public function nuevo(){
      $this->load->view('header');
      $this->load->view('estudiantes/nuevo');
      $this->load->view('footer');

    }
    public function guardar(){
      $datosNuevoEstudiante=array(
        "cedula_ins"=>$this->input->post('cedula_ins'),
        "primer_apellido_ins"=>$this->input->post('primer_apellido_ins'),
        "segundo_apellido_ins"=>$this->input->post('segundo_apellido_ins'),
        "nombres_ins"=>$this->input->post('nombres_ins'),
        "titulo_ins"=>$this->input->post('titulo_ins'),
        "telefono_ins"=>$this->input->post('telefono_ins'),
        "direccion_ins"=>$this->input->post('direccion_ins')
      );
      if ($this->Estudiante->insertar($datosNuevoEstudiante)) {
        redirect('estudiantes/index');
      }else{
        echo "<h1>ERROR AL INSERTAR</h1>";

      }

    }//funcion par aelimianr instructores
    public function eliminar($id_ins){
      //echo $id_ins;
      if ($this->Estudiante->borrar($id_ins)) {//invocando al modelo
        redirect('estudiantes/index');
      }else {
        echo "ERROR AL BORRAR :(";
      }
    }

  }//cierre de la clase

 ?>
