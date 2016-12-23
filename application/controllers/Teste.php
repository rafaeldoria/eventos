<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller{
    
    
    public function index(){
        $this->load->template("teste");
    }

    public function json(){
        $lista[0]["nome"] = "Pablo";
        $lista[0]["Idade"] = 28;
        $lista[0]["sexo"] = "Indefinido";
        var_dump($lista);
        echo "<br>". json_encode($lista);
    }
    
    public function indexTeste(){
        $this->load->model("usuarios_model"); 
        $id = $this->input->post("idUsuario");          
        $usuario = $this->usuarios_model->buscaUsuarioId($id);        
        $dados = array("usuario" => $usuario);
        $this->load->view("teste",$dados);
    }
    
}
