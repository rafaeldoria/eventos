<?php
function retorna_tiposUsuarios() {
    $ci = get_instance();
    $ci->load->model("TiposUsuarios_model");
    $tiposUsuarios = $ci->TiposUsuarios_model->retorna_tiposUsuarios();
    $option = "<option value=''></option>";
    foreach ($tiposUsuarios->result() as $linha) {
        $option .= "<option value='$linha->idTipoUsuario'>$linha->tipoUsuario</option>";
    }
    return $option;
}