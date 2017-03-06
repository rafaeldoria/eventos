//tabela lista equipamentos
$.getJSON("http://localhost:8090/eventos/Equipamento/lista_equipamentos", function (retorno) {
    var equipamento = eval(retorno);
    for (var i = 0; i < equipamento.length; i++) {
        $('#tabelaEquipamentos').append('<tr>' +
                '<td style="display:none">' + equipamento[i].idEquipamento + '</td>' +
                '<td>' + equipamento[i].nomeEquipamento + '</td>' +
                '<td>' + equipamento[i].tipoEquipamento + '</td>' +
                '<td>' + equipamento[i].marcaEquipamento + '</td>' +
                '<td>' + equipamento[i].serieEquipamento + '</td>' +
                '<td>' + equipamento[i].patrimonioEquipamento + '</td>' +
                '<td><button id="editarEquipamento' + i + '" class="btn btn-warning btn-xs" value="' + equipamento[i].idEquipamento + '">Editar</button> ' +
                '<button id="excluirEquipamento' + i + '" class="btn btn-danger btn-xs" value="' + equipamento[i].idEquipamento + '">Excluir</button> ' +
                '</tr>');
        $('#editarEquipamento' + i).click(function () {
           //alert("opa");
           editarEquipamento($(this).val());
        });
        $('#excluirEquipamento' + i).click(function () {
           //alert("opa");
           excluirEquipamento($(this).val());
        });
    }
});

//editar equipamentos
function editarEquipamento(idEquipamento) {
    $.post("http://localhost:8090/eventos/Equipamento/buscar_equipamento", {idEquipamento: idEquipamento}, function (retorno) {
        var resultado = eval(retorno);        
        $("#modalLabelEquipamento").text("Editar Equipamento "+ resultado[0].nomeEquipamento);
        $('#idEquipamento').val(resultado[0].idEquipamento);
        $("#div-idEquipamento").css("display", "none");
        $('#nomeEquipamento').val(resultado[0].nomeEquipamento);
        $('#tipoEquipamento').val(resultado[0].tipoEquipamento);
        $('#marcaEquipamento').val(resultado[0].marcaEquipamento);
        $('#serieEquipamento').val(resultado[0].serieEquipamento);
        $('#patrimonioEquipamento').val(resultado[0].patrimonioEquipamento);
        $('#modal_edita_equipamento').modal('show');
    });
}

//excluir equipamentos
function excluirEquipamento(idEquipamento){
    $.post("http://localhost:8090/eventos/Equipamento/buscar_equipamento", {idEquipamento: idEquipamento}, function(retorno){
        var resultado = eval(retorno);                
        $('#idEquipamentoExclui').val(resultado[0].idEquipamento);
        $("#div-idExcluiEquipamento").css("display", "none");  
        $("#excluirEquipamento").text("Deseja realmente excluir "+resultado[0].nomeEquipamento+"?"); 
        $('#modal_exclui_equipamento').modal('show');
    });
}