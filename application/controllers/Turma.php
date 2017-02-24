<?php

class Turma extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Turmas_model");
    }

    public function index() {
        autorizar();
        $this->load->template("turma/turma_view");
    }

    public function cadastro_turma() {
        $this->load->template("turma/adicionar_turma");
    }

    public function nova_turma() {
        $turma = array(
            "nomeTurma" => $this->input->post("nomeTurma"),
            "totalAlunosTurma" => $this->input->post("totalAlunosTurma"),
            "observacaoTurma" => $this->input->post("observacaoTurma")
        );
        $this->Turmas_model->salvaTurma($turma);
        redirect("Turma");
    }

    public function lista_turmas() {
        echo $this->Turmas_model->listaTurmas();
    }

    public function buscar_turma() {
        $idTurma = $this->input->post("idTurma");
        echo $this->Turmas_model->buscarTurmaId($idTurma);
    }

    public function excluir_turma() {
        $idTurma = $this->input->post("idExcluiTurma");
        $this->Turmas_model->excluirTurma($idTurma);
        redirect("Turma");
    }

    public function editar_turma() {
        $idTurma = $this->input->post("idTurma");
        $turma = array(
            "nomeTurma" => $this->input->post("nomeTurma"),
            "totalAlunosTurma" => $this->input->post("totalAlunosTurma"),
            "observacaoTurma" => $this->input->post("observacaoTurma"),
        );
        $this->Turmas_model->editaTurma($idTurma, $turma);
        redirect("Turma");
    }

}
