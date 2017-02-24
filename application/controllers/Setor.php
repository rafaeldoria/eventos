<?php

class Setor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Setores_model");
    }

    public function index() {
        autorizar();
        $this->load->template("setor/setor_view");
    }

    public function cadastro_setor() {
        $this->load->template("setor/adicionar_setor");
    }

    public function novo_setor() {
        $setor = array(
            "nomeSetor" => $this->input->post("nomeSetor"),
            "responsavelSetor" => $this->input->post("responsavelSetor"),
            "observacaoSetor" => $this->input->post("observacaoSetor")
        );
        $this->Setores_model->salvaSetor($setor);
        redirect("setor");
    }

    public function lista_setores() {
        echo $this->Setores_model->listaSetores();
    }

    public function buscar_setor() {
        $idSetor = $this->input->post("idSetor");
        echo $this->Setores_model->buscarSetorId($idSetor);
    }

    public function excluir_setor() {
        $idSetor = $this->input->post("idExcluiSetor");
        $this->Setores_model->excluirSetor($idSetor);
        redirect("Setor");
    }

    public function editar_setor() {
        $idSetor = $this->input->post("idSetor");
        $setor = array(
            "nomeSetor" => $this->input->post("nomeSetor"),
            "responsavelSetor" => $this->input->post("responsavelSetor"),
            "observacaoSetor" => $this->input->post("observacaoSetor")
        );
        $this->Setores_model->editaSetor($idSetor, $setor);
        redirect("Setor");
    }

}
