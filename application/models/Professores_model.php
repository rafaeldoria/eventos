<?php

class Professores_model extends CI_Model{
    
    public function salvaProfessor($professor){
        $this->db->insert("professores",$professor);
    }
    
    public function listaProfessores(){
        $this->db->order_by("idProfessor", "asc");
        return json_encode($this->db->get("professores")->result());
    }
    
    public function buscarProfessorId($idProfessor){
        $this->db->where("idProfessor", $idProfessor);
        return json_encode($this->db->get('professores')->result());
    }
    
    public function editaProfessor($idProfessor, $professor){
        $this->db->where("idProfessor", $idProfessor);
        $this->db->update("professores",$professor);
    }
    
    public function excluirProfessor($idProfessor){
        $this->db->where("idProfessor", $idProfessor);
        $this->db->delete("professores");
    }
}
