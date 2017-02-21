function excluirSetor(idSetor) {

    $.post("http://localhost/eventos/Setor/buscar_setor", {idSetor: idSetor}, function (retorno) {
        var resultado = eval(retorno); 
        $("#modalLabelExcluiSetor").text("Excluir Setor");
        $('#idExcluiSetor').val(resultado[0].idSetor);
        $("#div-idExcluiSetor").css("display", "none");        
        $('#modal_exclui_Setor').modal('show');
    });
}

function editarSetor(idSetor) {

    $.post("http://localhost/eventos/Setor/buscar_setor", {idSetor: idSetor}, function (retorno) {
        var resultado = eval(retorno);        
        $('#idSetor').val(resultado[0].idSetor);
        $("#div-idSetor").css("display", "none");
        $('#nomeSetor').val(resultado[0].nomeSetor);
        $('#responsavelSetor').val(resultado[0].responsavelSetor);
        $('#observacaoSetor').val(resultado[0].observacaoSetor);        
        $('#modal_edita_Setor').modal('show');
    });
}

$.getJSON("http://localhost/eventos/Setor/lista_setores", function (retorno) {
    var setor = eval(retorno);
    for (var i = 0; i < setor.length; i++) {
        $('#tabelaSetores').append('<tr>' +
                '<td>' + setor[i].idSetor + '</td>' +
                '<td>' + setor[i].nomeSetor + '</td>' +
                '<td>' + setor[i].responsavelSetor + '</td>' +
                '<td>' + setor[i].observacaoSetor + '</td>'+
                '<td><button id="editarSetor' + i + '" class="btn btn-warning btn-xs" value="' + setor[i].idSetor + '">Editar</button> ' +
                '<button id="excluirSetor' + i + '" class="btn btn-danger btn-xs" value="' + setor[i].idSetor + '">Excluir</button> ' +
                '</tr>');
        $('#excluirSetor' + i).click(function () {
            //alert("opa");
            excluirSetor($(this).val());
        });

        $('#editarSetor' + i).click(function () {
            //alert("opa");
            editarSetor($(this).val());
        });

    }

});








