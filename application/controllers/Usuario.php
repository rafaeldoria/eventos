<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Usuarios_model");
    }

    public function index() {
        autorizar();
        $this->load->model("Usuarios_model");
        $this->load->template("usuario/usuario_view");
    }

    public function cadastrar_usuario() {
        autorizar();
        $this->load->template("usuario/cadastro_usuario");
    }

    public function novo_usuario() {
        $usuario = array(
            "nomeUsuario" => $this->input->post("nomeUsuario"),
            "emailUsuario" => $this->input->post("emailUsuario"),
            "telefoneUsuario" => $this->input->post("telefoneUsuario"),
            "ramalUsuario" => $this->input->post("ramalUsuario"),
            "loginUsuario" => $this->input->post("loginUsuario"),
            "senhaUsuario" => base64_encode($this->input->post("senhaUsuario")),
            "setorUsuario" => $this->input->post("setorUsuario")            
        );
        $this->Usuarios_model->salvaUsuario($usuario);

        redirect("usuario");
    }

    public function lista_usuarios() {
        autorizar();
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
            "setorUsuario" => $this->input->post("setorUsuario"),
        );
        $this->Usuarios_model->editaUsuario($usuario, $id);

        redirect("usuario");
    }

    public function buscar_usuario() {
        $idUsuario = $this->input->post("idUsuario");
        echo $this->Usuarios_model->buscaUsuarioId($idUsuario);
    }

    public function retorna_usuario() {
        $idUsuario = $this->input->post("idUsuario");
        echo $this->Usuarios_model->buscaUsuarioId($idUsuario);
    }

    public function excluir_usuario() {
        $idUsuario = $this->input->post("idUsuarioExclui");
        $this->Usuarios_model->excluiUsuario($idUsuario);
        redirect("usuario");
    }

    public function novo_cadastro() {
        $usuario = array(
            "nomeUsuario" => $this->input->post("nomeUsuario"),
            "emailUsuario" => $this->input->post("emailUsuario"),
            "telefoneUsuario" => $this->input->post("telefoneUsuario"),
            "ramalUsuario" => $this->input->post("ramalUsuario"),
            "loginUsuario" => $this->input->post("loginUsuario"),
            "senhaUsuario" => base64_encode($this->input->post("senhaUsuario")),
            "setorUsuario" => $this->input->post("setorUsuario")
        );
        $this->Usuarios_model->salvaUsuario($usuario);
        $this->session->set_flashdata("success", "Cadastro Realizado! - Fazer Login");
        redirect("login");
    }

}
