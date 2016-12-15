<?php

class TiposUsuarios_model extends CI_Model {
    public function retorna_tiposUsuarios(){
        $this->db->order_by("tipoUsuario", "asc");
        $consulta = $this->db->get("tiposusuarios");

        return $consulta;
    }
}
