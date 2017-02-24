$.getJSON("http://localhost/eventos/Turma/lista_turmas", function (retorno) {
    var turma = eval(retorno);
    for (var i = 0; i < turma.length; i++) {
        $('#tabelaTurmas').append('<tr>' +
                '<td style="display:none">' + turma[i].idTurma + '</td>' +
                '<td>' + turma[i].nomeTurma + '</td>' +
                '<td>' + turma[i].totalAlunosTurma + '</td>' +
                '<td>' + turma[i].observacaoTurma + '</td>' +
                '<td><button id="editarTurma' + i + '" class="btn btn-warning btn-xs" value="' + turma[i].idTurma + '">Editar</button> ' +
                '<button id="excluirTurma' + i + '" class="btn btn-danger btn-xs" value="' + turma[i].idTurma + '">Excluir</button> ' +
                '</tr>');
        $('#editarTurma' + i).click(function () {
            //alert("opa");
            editarTurma($(this).val());
        });

        $('#excluirTurma' + i).click(function () {
            //alert("opa");
            excluirTurma($(this).val());
        });
    }

});

function editarTurma(idTurma) {
    $.post("http://localhost/eventos/Turma/buscar_turma", {idTurma: idTurma}, function (retorno) {
        var resultado = eval(retorno);
        $("#modalLabelTurma").text("Editar Turma "+ resultado[0].nomeTurma);
        $('#idTurma').val(resultado[0].idTurma);
        $("#div-idTurma").css("display", "none");
        $('#nomeTurma').val(resultado[0].nomeTurma);
        $('#totalAlunosTurma').val(resultado[0].totalAlunosTurma);
        $('#observacaoTurma').val(resultado[0].observacaoTurma);
        $('#modal_edita_turma').modal('show');
    });
}

function excluirTurma(idTurma) {
    $.post("http://localhost/eventos/Turma/buscar_turma", {idTurma: idTurma}, function (retorno) {
        var resultado = eval(retorno);        
        $('#idExcluiTurma').val(resultado[0].idTurma);
        $("#div-idExcluiTurma").css("display", "none");
        $('#modal_exclui_Turma').modal('show');
        $("#excluirTurma").text("Excluir Turma "+resultado[0].nomeTurma+"?");
    });
}


