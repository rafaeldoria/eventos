<?php

class Equipamentos_model extends CI_Model{
    
    public function salvaEquipamento($equipamento){
        $this->db->insert("equipamentos",$equipamento);
    }
}
