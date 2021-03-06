<?php

class Local extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Locais_model");
    }

    public function index() {
        autorizar();
        $this->load->template("local/local_view");
    }

    public function cadastro_local() {
        autorizar();
        $this->load->template("local/adicionar_local");
    }

    public function novo_local() {
        $local = array(
            "nomeLocal" => $this->input->post("nomeLocal"),
            "tipoLocal" => $this->input->post("tipoLocal"),
            "andarLocal" => $this->input->post("andarLocal"),
            "totalAssentosLocal" => $this->input->post("totalAssentosLocal"),
            "tipoAssentosLocal" => $this->input->post("tipoAssentosLocal")
        );
        $this->Locais_model->salvaLocal($local);

        redirect("Local");
    }

    public function lista_locais() {
        echo $this->Locais_model->listaLocais();
    }

    public function buscar_local() {
        $idLocal = $this->input->post("idLocal");
        echo $this->Locais_model->buscaLocalId($idLocal);
    }

    public function editar_local() {
        $id = $this->input->post("idLocal");
        $local = array(
            "nomeLocal" => $this->input->post("nomeLocal"),
            "tipoLocal" => $this->input->post("tipoLocal"),
            "andarLocal" => $this->input->post("andarLocal"),
            "totalAssentosLocal" => $this->input->post("totalAssentosLocal"),
            "tipoAssentosLocal" => $this->input->post("tipoAssentosLocal"),
        );
        $this->Locais_model->editaLocal($id, $local);

        redirect("local");
    }

    public function excluir_local() {
        $idLocal = $this->input->post("idLocalExcluiLocal");
        $this->Locais_model->excluiLocal($idLocal);
        redirect("local");
    }

}
