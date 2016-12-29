<?php

class Equipamentos_model extends CI_Model{
    
    public function salvaEquipamento($equipamento){
        $this->db->insert("equipamentos",$equipamento);
    }
    
    public function listaEquipamentos(){
        $this->db->order_by("idEquipamento", "asc");
        return json_encode($this->db->get("equipamentos")->result());
    }
    
    public function buscarEquipamentoId($idEquipamento){
        $this->db->where("idEquipamento", $idEquipamento);
        return json_encode($this->db->get('equipamentos')->result());
    }
    
    public function editaEquipamento($idEquipamento, $equipamento){
        $this->db->where("idEquipamento", $idEquipamento);
        $this->db->update("equipamentos",$equipamento);
    }
    
    public function excluirEquipamento($idEquipamento){
        $this->db->where("idEquipamento", $idEquipamento);
        $this->db->delete("equipamentos");
    }
}
