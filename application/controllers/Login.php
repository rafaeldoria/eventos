<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view("login");
    }
    
    public function autenticar(){
        $this->load->model("usuarios_model");
        $login = $this->input->post("username");
        $senha = md5($this->input->post("password"));
        $usuario = $this->usuarios_model->buscaUsuario($login, $senha);
        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("success", "Logado com sucesso");
            redirect("/welcome");
        } else {
            $this->session->set_flashdata("danger", "Usuário ou senha inválida");
            redirect("/login");
        }
        
    }

}
