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
}
