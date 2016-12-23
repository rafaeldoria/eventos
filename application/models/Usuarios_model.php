<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public function buscaUsuario($login, $senha) {
        $this->db->where("loginUsuario", $login);
        $this->db->where("senhaUsuario", $senha);
        $usuario = $this->db->get("usuarios")->row_array();
        return $usuario;
    }

    public function salvaUsuario($usuario) {
        $this->db->insert("usuarios", $usuario);
    }

    public function listaUsuarios() {
        $this->db->order_by("idUsuario", "asc");
        return json_encode($this->db->get("usuarios")->result());
    }

    public function buscaUsuarioId($idUsuario) {
        $this->db->where("idUsuario", $idUsuario);
        return json_encode($this->db->get("usuarios")->result());
    }

    public function excluiUsuario($idUsuario) {
        $this->db->where('idUsuario', $idUsuario)->delete('usuarios');
    }

    public function editaUsuario($usuario, $id){
        $this->db->where('idUsuario',$id);
        $this->db->update('usuarios',$usuario);         
    }
    
}
