<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model{
    public function buscaUsuario($login, $senha){
        $this->db->where("loginUsuario", $login);
        $this->db->where("senhaUsuario", $senha);        
        $usuario = $this->db->get("usuarios")->row_array();
        return $usuario;
    }
    
    public function salvaUsuario($usuario){
        $this->db->insert("usuarios", $usuario);
    }
}
