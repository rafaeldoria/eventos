<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index() {
        autorizar();
        $this->load->model("Usuarios_model");
        $this->load->template("usuario/usuario_view");
    }

    public function cadastrar_usuario() {
        autorizar();
        $tiposUsuarios = retorna_tiposUsuarios();
        $dados ['tipoDeUsuario'] = $tiposUsuarios;
        //$this->load->view("includes/header");
        $this->load->template("usuario/cadastro_usuario", $dados);
    }

    public function novo_usuario() {
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

    public function lista_usuarios() {
        autorizar();
        $this->load->model("Usuarios_model");
        echo $this->Usuarios_model->listaUsuarios();
    }

    public function editar_usuario() {
        $id = $this->input->post("idUsuario");
        $usuario = array(
            "nomeUsuario" => $this->input->post("nomeUsuario"),
            "emailUsuario" => $this->input->post("emailUsuario"),
            "telefoneUsuario" => $this->input->post("telefoneUsuario"),
            "ramalUsuario" => $this->input->post("ramalUsuario"),
            "loginUsuario" => $this->input->post("loginUsuario"),
        );

        $this->load->model("Usuarios_model");
        $this->Usuarios_model->editaUsuario($usuario, $id);

        redirect("usuario");
    }

    public function buscar_usuario() {
        $idUsuario = $this->input->post("idUsuario");
        $this->load->model("Usuarios_model");
        echo $this->Usuarios_model->buscaUsuarioId($idUsuario);
    }
    
    public function retorna_usuario() {
        $idUsuario = $this->input->post("idUsuario");
        $this->load->model("Usuarios_model");
        echo $this->Usuarios_model->buscaUsuarioId($idUsuario);
    }

    public function excluir_usuario() {
        $idUsuario = $this->input->post("idUsuarioExclui");
        $this->load->model("Usuarios_model");
        $this->Usuarios_model->excluiUsuario($idUsuario);
        redirect("usuario");
        
    }

}
