<?php

class Fornecedores_model extends CI_Model{
    
    public function adicionaFornecedor($fornecedor) {
        $this->db->insert("fornecedores",$fornecedor);
    }
}
