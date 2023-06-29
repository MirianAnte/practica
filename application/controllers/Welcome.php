<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}
	public function login()
	{
		$this->load->view("login");
	}
	public function iniciarSesion()
	{
		$this->load->model("Usuario");
		$email_usu=$this->input->post("email_usu");
	  $password_usu=$this->input->post("password_usu");
	  $usuarioConectado=$this->Usuario->obtenerPorEmailPassword($email_usu,$password_usu);
	  	if($usuarioConectado){
	    	$this->session->set_userdata("conectado",$usuarioConectado);
				$this->session->set_flashdata("Bienvenido","Bienvenido al sistema ".$usuarioConectado->nombre_usu.":".$usuarioConectado->perfil_usu);
	    	redirect("welcome/index");
	    	}else{
	    	redirect("welcome/login");
	    	}
//funcio cerrar sesion
	}
	public function cerrarSesion()
	{
		$this->session->sess_destroy();
		redirect("welcome/login");
	}
}
