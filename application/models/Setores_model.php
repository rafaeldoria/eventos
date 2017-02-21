<?php

class Setores_model extends CI_Model {

    public function salvaSetor($setor) {
        $this->db->insert("setores", $setor);
    }

    public function listaSetores() {
        $this->db->order_by("idSetor", "asc");
        return json_encode($this->db->get("setores")->result());
    }

    public function buscarSetorId($idSetor) {
        $this->db->where("idSetor", $idSetor);
        return json_encode($this->db->get("setores")->result());
    }

    public function editaSetor($idSetor, $setor) {
        $this->db->where('idSetor', $idSetor);
        $this->db->update('setores', $setor);
    }

    public function excluirSetor($idSetor) {
        $this->db->where('idSetor', $idSetor)->delete('setores');
    }

    public function retornaSetores() {
        $this->db->order_by("nomeSetor", "asc");
        $consulta = $this->db->get("setores");
        return $consulta;
    }

}
