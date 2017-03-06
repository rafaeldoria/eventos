<?php

class Eventos_model extends CI_Model{
    
    public function adicionaEvento($evento) {
        $this->db->insert("eventos",$evento);
    }
}
