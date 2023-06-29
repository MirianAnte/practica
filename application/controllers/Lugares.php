<?php

class Lugares extends CI_controller
{

  function __construct()
  {
    parent::__construct();
    //nombre del odelo
    $this->load->model("Lugar");
  }
  public function index(){
  $data["lugares"]=$this->Lugar->obtenerTodos();
  //print_r($lugares);
    $this->load->view('header');
    $this->load->view('lugares/index',$data);
    $this->load->view('footer');

  }
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('lugares/nuevo');
    $this->load->view('footer');
 }
public function guardar(){
  $datosNuevoLugar=array(

    'nombre_lug'=>$this->input->post('nombre_lug'),
     'tipo_lug'=>$this->input->post('tipo_lug'),
     'telefono_lug'=>$this->input->post('telefono_lug'),
     'gmail_lug'=>$this->input->post('gmail_lug'),
     'direccion_lug'=>$this->input->post('direccion_lug')


);
//$this->lugar->Insertar($datosNuevolugar);
if ($this->Lugar->Insertar($datosNuevoLugar)){
  redirect('lugares/index');
}else{
echo "error al insertar";
}
 }
 }
 ?>
