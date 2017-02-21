<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
   

    public function template($nome, $dados = array()) {
        $usuario = autorizar();        
        $setores = retorna_setores();
        $dados = array("usuario" => $usuario['nomeUsuario'],
            "optionsSetor" => $setores);            
        $this->view("includes/header");
        $this->view("includes/menu");
        $this->view("includes/sidebar");
        $this->view("includes/body");        
        $this->view($nome, $dados);
        $this->view("includes/footer");
        $this->view("includes/modal");
    }

}
