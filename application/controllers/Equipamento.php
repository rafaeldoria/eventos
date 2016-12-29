<?php

class Equipamento extends CI_Controller{
    public function index(){
        autorizar();
        $this->load->template("equipamento/equipamento_view");
    }
    
    public function adicionar_equipamento(){
        $this->load->template("equipamento/adicionar_equipamento");
    }
    
    public function novo_equipamento(){
        $equipamento = array(
        "nomeEquipamento" => $this->input->post("nomeEquipamento"),
        "tipoEquipamento" => $this->input->post("tipoEquipamento"),
        "marcaEquipamento" => $this->input->post("marcaEquipamento"),
        "serieEquipamento" => $this->input->post("serieEquipamento"),        
        "patrimonioEquipamento" => $this->input->post("patrimonioEquipamento")
        );
        $this->load->model("Equipamentos_model");
        $this->Equipamentos_model->salvaEquipamento($equipamento);
        redirect("Equipamento");
    }
    
    public function lista_equipamentos(){
        $this->load->model("Equipamentos_model");
        echo $this->Equipamentos_model->listaEquipamentos();
    }
    
    public function buscar_equipamento(){
        $idEquipamento = $this->input->post("idEquipamento");
        $this->load->model("Equipamentos_model");
        echo $this->Equipamentos_model->buscarEquipamentoId($idEquipamento);
    }
    
    public function editar_equipamento(){
        $idEquipamento = $this->input->post("idEquipamento");
        $equipamento = array(
            "nomeEquipamento" => $this->input->post("nomeEquipamento"),
            "tipoEquipamento" => $this->input->post("tipoEquipamento"),
            "marcaEquipamento" => $this->input->post("marcaEquipamento"),
            "serieEquipamento" => $this->input->post("serieEquipamento"),
            "patrimonioEquipamento" => $this->input->post("patrimonioEquipamento")        
        );
        $this->load->model("Equipamentos_model");
        $this->Equipamentos_model->editaEquipamento($idEquipamento, $equipamento);
        redirect("Equipamento");
    }
    
    public function excluir_equipamentos() {
        $idEquipamento = $this->input->post("idEquipamentoExclui");
        $this->load->model("Equipamentos_model");
        $this->Equipamentos_model->excluirEquipamento($idEquipamento);
        redirect("Equipamento");
    }
}
