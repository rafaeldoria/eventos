<?php

class TiposEventos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("TiposEventos_model");
    }

    public function index() {
        autorizar();
        $this->load->template("tipoEventos/tipoEvento_view");
    }

    public function cadastro_tipoEvento() {
        $this->load->template("TipoEventos/adicionar_tipoEvento");
    }

    public function novo_tipoEvento() {
        $tipoEvento = array(
            "nomeTipoEvento" => $this->input->post("nomeTipoEvento"),
            "observacaoTipoEvento" => $this->input->post("observacaoTipoEvento")
        );
        $this->TiposEventos_model->salvaTipoEvento($tipoEvento);
        redirect("TiposEventos");
    }

    public function lista_tipoEventos() {
        echo $this->TiposEventos_model->listaTipoEventos();
    }

    public function buscar_tipoEvento() {
        $idTipoEvento = $this->input->post("idTipoEvento");
        echo $this->tiposEventos_model->buscarTipoEventoId($idTipoEvento);
    }

    public function excluir_tipoEventos() {
        $idTipoEvento = $this->input->post("idExcluiTipoEvento");
        $this->tiposEventos_model->excluirTipoEvento($idTipoEvento);
        redirect("TiposEventos");
    }

    public function editar_tipoEventos() {
        $idTipoEvento = $this->input->post("idTipoEvento");
        $tipoEvento = array(
            "nomeTipoEvento" => $this->input->post("nomeTipoEvento"),
            "observacaoTipoEvento" => $this->input->post("observacaoTipoEvento"),
        );
        $this->tiposEventos_model->editatipoEvento($idTipoEvento, $tipoEvento);
        redirect("TiposEventos");
    }

}
