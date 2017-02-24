<?php

class Empresa extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("Empresas_model");
    }

    public function index() {
        autorizar();
        $this->load->template("empresa/empresa_view");
    }

    public function cadastro_empresa() {
        autorizar();
        $this->load->template("empresa/adicionar_empresa");
    }
    
    public function nova_empresa(){
        $empresa = array(
            "nomeEmpresa" => $this->input->post("nomeEmpresa"),
            "telefoneEmpresa" => $this->input->post("telefoneEmpresa"),
            "responsavelEmpresa" => $this->input->post("responsavelEmpresa"),
            "celularEmpresa" => $this->input->post("celularEmpresa"),
            "emailEmpresa" => $this->input->post("emailEmpresa")            
        );  
        $this->Empresas_model->salvaEmpresa($empresa);
        redirect("empresa");
    }
    
    public function lista_empresas(){
        echo $this->Empresas_model->listaEmpresas();        
    }
    
    public function buscar_empresa(){
        $idEmpresa = $this->input->post("idEmpresa");
        echo $this->Empresas_model->buscarEmpresaId($idEmpresa);        
    }
    
    public function editar_empresa(){
        $idEmpresa = $this->input->post("idEmpresa");
        $empresa = array(
            "nomeEmpresa" => $this->input->post("nomeEmpresa"),
            "telefoneEmpresa" => $this->input->post("telefoneEmpresa"),
            "responsavelEmpresa" => $this->input->post("responsavelEmpresa"),
            "celularEmpresa" => $this->input->post("celularEmpresa"),
            "emailEmpresa" => $this->input->post("emailEmpresa")            
        );
        $this->Empresas_model->editarEmpresa($idEmpresa,$empresa);
        redirect("empresa");
    }
    
    public function excluir_empresa(){
        $idEmpresa = $this->input->post("idEmpresaExclui");
        $this->Empresas_model->excluirEmpresa($idEmpresa);
        redirect("empresa");
    }

}
