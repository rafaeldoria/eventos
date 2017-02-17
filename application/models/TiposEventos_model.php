<?php

class TiposEventos_model extends CI_Model{
    
    public function salvaTipoEvento($tipoEvento){
        $this->db->insert("tiposeventos",$tipoEvento);
    }
    
    public function listaTipoEventos(){
        $this->db->order_by("idTipoEvento", "asc");
        return json_encode($this->db->get("tiposeventos")->result());
    }
    
    public function buscarTipoEventoId($idTipoEvento){
        $this->db->where("idTipoEvento", $idTipoEvento);
        return json_encode($this->db->get('tiposeventos')->result());
    }
    
    public function editaTipoEvento($idTipoEvento, $tipoEvento){
        $this->db->where("idTipoEvento", $idTipoEvento);
        $this->db->update("tiposeventos",$tipoEvento);
    }
    
    public function excluirTipoEvento($idTipoEvento){
        $this->db->where("idTipoEvento", $idTipoEvento);
        $this->db->delete("tiposeventos");
    }
}
