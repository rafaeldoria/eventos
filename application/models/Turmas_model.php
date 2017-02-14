<?php

class Turmas_model extends CI_Model{
    public function salvaTurma($turma){
        $this->db->insert("turmas", $turma);
    }
    
    public function listaTurmas(){        
        $this->db->order_by("idTurma", "asc");
        return json_encode($this->db->get("turmas")->result());   
    }
    
    public function buscarTurmaId($idTurma) {
        $this->db->where("idTurma", $idTurma);
        return json_encode($this->db->get("turmas")->result());
    }
    
    public function editaTurma($idTurma, $turma){
        $this->db->where('idTurma',$idTurma);
        $this->db->update('turmas',$turma); 
    }
    
    public function excluirTurma($idTurma){
        $this->db->where('idTurma', $idTurma)->delete('turmas');
    }
    
}
