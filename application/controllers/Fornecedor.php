<?php

class Fornecedor extends CI_Controller {
    
    public function index() {
        autorizar();
        $this->load->template("fornecedor/fornecedor_view");
    }

    public function adicionar_fornecedor() {
        autorizar();
        $this->load->template("fornecedor/adicionar_fornecedor");
    }

    public function novo_fornecedor() {
        $fornecedor = array(
            "nomeFornecedor" => $this->input->post("nomeFornecedor"),
            "cnpjFornecedor" => $this->input->post("cnpjFornecedor"),
            "telefoneFornecedor" => $this->input->post("telefoneFornecedor"),
            "enderecoFornecedor" => $this->input->post("enderecoFornecedor")
        );
        $this->load->model("Fornecedores_model");
        $this->Fornecedores_model->adicionaFornecedor($fornecedor);
        redirect("fornecedor");        
    }
    
    public function lista_fornecedores(){
        $this->load->model("Fornecedores_model");
        echo $this->Fornecedores_model->listaFornecedores();
    }
    
    public function buscar_fornecedor(){
        $idFornecedor = $this->input->post("idFornecedor");
        $this->load->model("Fornecedores_model");
        echo $this->Fornecedores_model->buscaFornecedorId($idFornecedor);
    }
    
    public function editar_fornecedor() {
        $id = $this->input->post("idFornecedor");
        $fornecedor = array(
            "nomeFornecedor" => $this->input->post("nomeFornecedor"),
            "cnpjFornecedor" => $this->input->post("cnpjFornecedor"),
            "telefoneFornecedor" => $this->input->post("telefoneFornecedor"),
            "enderecoFornecedor" => $this->input->post("enderecoFornecedor")            
        );

        $this->load->model("Fornecedores_model");
        $this->Fornecedores_model->editaFornecedor($id, $fornecedor);

        redirect("fornecedor");
    }
    
    public function excluir_fornecedor() {
        $idFornecedor = $this->input->post("idFornecedorExclui");
        $this->load->model("Fornecedores_model");
        $this->Fornecedores_model->excluiFornecedor($idFornecedor);
        redirect("fornecedor");
    }
    

}
