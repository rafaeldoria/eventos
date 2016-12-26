<?php

class Locais_model extends CI_Model{
    public function salvaLocal($local){
        $this->db->insert("locais", $local);
    }
    
    public function listaLocais(){        
        $this->db->order_by("idLocal", "asc");
        return json_encode($this->db->get("locais")->result());   
    }
    
    public function buscaLocalId($idLocal) {
        $this->db->where("idLocal", $idLocal);
        return json_encode($this->db->get("locais")->result());
    }
    
    public function editaLocal($id, $local){
        $this->db->where('idLocal',$id);
        $this->db->update('locais',$local); 
    }
    
    public function excluiLocal($idLocal){
        $this->db->where('idLocal', $idLocal)->delete('locais');
    }
    
}
