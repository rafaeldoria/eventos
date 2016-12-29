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

}
