<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() { 
            $this->load->view('includes/header');
            $this->load->view("login_view");
    }
    
    public function autenticar(){
        $this->load->model("usuarios_model");
        $login = $this->input->post("username");
        $senha = md5($this->input->post("password"));
        $usuario = $this->usuarios_model->buscaUsuario($login, $senha);
        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("success", "Logado com sucesso");
            redirect("/home");
        } else {
            $this->session->set_flashdata("danger", "Usuário ou senha inválida");
            redirect("/login");
        }
        
    }
    
    public function logout() {
        $this->session->unset_userdata("usuario_logado");
        $this->session->set_flashdata("success", "Deslogado");
        redirect("/login");
    }
    
    public function novo_login(){        
        $this->load->view("login/cadastro_novousuario");
    }

}
