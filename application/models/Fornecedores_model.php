<?php

class Fornecedores_model extends CI_Model{
    
    public function adicionaFornecedor($fornecedor) {
        $this->db->insert("fornecedores",$fornecedor);
    }
    
    public function listaFornecedores(){
        $this->db->order_by("idFornecedor", "asc");
        return json_encode($this->db->get("fornecedores")->result());   
    }
    
    public function buscaFornecedorId($idFornecedor){
        $this->db->where("idFornecedor", $idFornecedor);
        return json_encode($this->db->get("fornecedores")->result());
    }
    
    public function editaFornecedor($id, $fornecedor){
        $this->db->where('idFornecedor',$id);
        $this->db->update('fornecedores',$fornecedor);
    }
    
    public function excluiFornecedor($id) {
        $this->db->where('idFornecedor',$id)->delete('fornecedores');        
    }
}
