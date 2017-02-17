<?php

class Professor extends CI_Controller{
    public function index(){
        autorizar();
        $this->load->template("professor/professor_view");
    }
    
    public function cadastro_professor(){
        $this->load->template("professor/adicionar_professor");
    }
    
    public function novo_professor() {
        $professor = array(
            "nomeProfessor" => $this->input->post("nomeProfessor"),
            "emailProfessor" => $this->input->post("emailProfessor"),
            "celularProfessor" => $this->input->post("celularProfessor"),
            "observacaoProfessor" => $this->input->post("observacaoProfessor")
        );
        $this->load->model("Professores_model");
        $this->Professores_model->salvaProfessor($professor);
        redirect("Professor");
    }
    
    public function lista_professores() {
        $this->load->model("Professores_model");
        echo $this->Professores_model->listaProfessores();        
    }
    
    public function buscar_professor() {
        $idProfessor = $this->input->post("idProfessor");
        $this->load->model("Professores_model");
        echo $this->Professores_model->buscarProfessorId($idProfessor);
    }
    
    public function excluir_professor(){
        $idProfessor = $this->input->post("idExcluiProfessor");
        $this->load->model("Professores_model");
        $this->Professores_model->excluirProfessor($idProfessor);
        redirect("Professor");
    }
    
    public function editar_professor() {
        $idProfessor = $this->input->post("idProfessor");
        $professor = array(
            "nomeProfessor" => $this->input->post("nomeProfessor"),
            "emailProfessor" => $this->input->post("emailProfessor"),
            "celularProfessor" => $this->input->post("celularProfessor"),
            "observacaoProfessor" => $this->input->post("observacaoProfessor"),            
        );
        $this->load->model("Professores_model");
        $this->Professores_model->editaProfessor($idProfessor, $professor);
        redirect("Professor");
    }
}
