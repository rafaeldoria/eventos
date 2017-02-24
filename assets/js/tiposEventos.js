$.getJSON("http://localhost/eventos/TiposEventos/lista_tipoEventos", function (retorno) {
    var tipoEvento = eval(retorno);
    for (var i = 0; i < tipoEvento.length; i++) {
        $('#tabelaTiposEventos').append('<tr>' +
                '<td style="display:none">' + tipoEvento[i].idTipoEvento+ '</td>' +
                '<td>' + tipoEvento[i].nomeTipoEvento + '</td>' +
                '<td>' + tipoEvento[i].observacaoTipoEvento + '</td>' +                
                '<td><button id="editarTipoEvento' + i + '" class="btn btn-warning btn-xs" value="' + tipoEvento[i].idTipoEvento + '">Editar</button> ' +
                '<button id="excluirTipoEvento' + i + '" class="btn btn-danger btn-xs" value="' + tipoEvento[i].idTipoEvento + '">Excluir</button> ' +
                '</tr>');
        $('#editarTipoEvento' + i).click(function () {
           //alert("opa");
           editarTipoEvento($(this).val());
        });
        $('#excluirTipoEvento' + i).click(function () {
           //alert("opa");
           excluirTipoEvento($(this).val());
        });
    }
});

function editarTipoEvento(idTipoEvento) {
    $.post("http://localhost/eventos/TiposEventos/buscar_tipoEvento", {idTipoEvento: idTipoEvento}, function (retorno) {
        var resultado = eval(retorno);   
        $("#modalLabelTipoEvento").text("Editar Dados "+resultado[0].nomeTipoEvento);
        $('#idTipoEvento').val(resultado[0].idTipoEvento);
        $("#div-idTipoEvento").css("display", "none");        
        $('#nomeTipoEvento').val(resultado[0].nomeTipoEvento);        
        $('#observacaoTipoEvento').val(resultado[0].observacaoTipoEvento);
        $('#modal_edita_TipoEvento').modal('show');
    });
}

function excluirTipoEvento(idTipoEvento){
    $.post("http://localhost/eventos/TiposEventos/buscar_tipoEvento", {idTipoEvento: idTipoEvento}, function(retorno){
        var resultado = eval(retorno);        
        $("#modalLabelExcluiTipoEvento").text("Excluir Tipo de Evento");
        $('#idExcluiTipoEvento').val(resultado[0].idTipoEvento);
        $("#div-idExcluiTipoEvento").css("display", "none");  
        $("#excluirTipoEvento").text(" Deseja realmente excluir tipo evento "+resultado[0].nomeTipoEvento+"?");
        $('#modal_exclui_TipoEvento').modal('show');
    });
}