<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("Eventos_model");
    }
    
    public function index(){
        autorizar();        
        $this->load->template("evento/evento_view");
    }
    public function adicionar_evento() {
        autorizar();
        $this->load->template("evento/adicionar_evento");
    }
    
    public function novo_evento() {
        $tipoEvento = $this->input->post("tipoEvento");

        $periodos = implode($this->input->post("periodoEvento"),",");       
        /*foreach ($periodo as $key => $value) {
          implode($arrayPeriodo[$key] = $value,",");
        }*/
        if($tipoEvento == 'MBA'){
        $evento = array(            
            "nomeEvento" => $this->input->post("nomeTurma"),
            "responsavelEvento" => $this->input->post("nomeProfessor"),
            "tipoEvento" => $this->input->post("tipoEvento"),
            "dataEvento" => $this->input->post("dataEvento"),            
            "localEvento" => $this->input->post("nomeLocal"),            
            "periodoEvento" => ($periodos)        
        );
        }
        if($tipoEvento == 'Espaço Empresarial'){
        $evento = array(            
            "nomeEvento" => $this->input->post("nomeEvento"),
            "responsavelEvento" => $this->input->post("responsavelEmpresa"),
            "tipoEvento" => $this->input->post("tipoEvento"),
            "dataEvento" => $this->input->post("dataEvento"),
            "localEvento" => $this->input->post("nomeLocal"),            
            "periodoEvento" => ($periodos)       
        );
        }
        $this->Eventos_model->adicionaEvento($evento);
        redirect("usuario");
    }
    
}
