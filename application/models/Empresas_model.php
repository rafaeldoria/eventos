<?php

class Empresas_model extends CI_Model{
    public function salvaEmpresa($empresa){
        $this->db->insert('empresas',$empresa);
    }
    
    public function listaEmpresas(){  
        $this->db->order_by('idEmpresa','asc');
        return json_encode($this->db->get('empresas')->result());
    }
    
    public function buscarEmpresaId($idEmpresa){
        $this->db->where('idEmpresa',$idEmpresa);
        return json_encode($this->db->get('empresas')->result());
    }
    
    public function editarEmpresa($idEmpresa,$empresa){
        $this->db->where('idEmpresa',$idEmpresa);
        $this->db->update('empresas',$empresa);
    }
    
    public function excluirEmpresa($idEmpresa){
        $this->db->where('idEmpresa',$idEmpresa);
        $this->db->delete('empresas');
    }
}
