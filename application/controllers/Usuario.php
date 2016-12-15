<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{
    
    public function index (){
        $tiposUsuarios = retorna_tiposUsuarios();
        $dados ['tipoDeUsuario'] = $tiposUsuarios; 
        $this->load->view("cadastro_usuario", $dados);
    }
    
    public function novo_usuario(){
        $usuario = array(
            "nomeUsuario" => $this->input->post("nomeUsuario"),
            "emailUsuario" => $this->input->post("emailUsuario"),
            "telefoneUsuario" => $this->input->post("telefoneUsuario"),
            "ramalUsuario" => $this->input->post("ramalUsuario"),
            "loginUsuario" => $this->input->post("loginUsuario"),
            "senhaUsuario" => md5($this->input->post("senhaUsuario")),
            "tipoUsuario" => $this->input->post("tipoUsuario")            
        );
        
        $this->load->model("Usuarios_model");
        $this->Usuarios_model->salvaUsuario($usuario);
        
        redirect("Login");
        
    }
}
