$.getJSON("http://localhost/eventos/Local/lista_locais", function (retorno) {
    var local = eval(retorno);
    for (var i = 0; i < local.length; i++) {
        $('#tabelaLocais').append('<tr>' +
                '<td>' + local[i].idLocal + '</td>' +
                '<td>' + local[i].nomeLocal + '</td>' +
                '<td>' + local[i].tipoLocal + '</td>' +
                '<td>' + local[i].andarLocal + '</td>' +
                '<td>' + local[i].totalAssentosLocal + '</td>' +
                '<td>' + local[i].tipoAssentosLocal + '</td>' +
                '<td><button id="editarLocal' + i + '" class="btn btn-warning btn-xs" value="' + local[i].idLocal + '">Editar</button> ' +
                '<button id="excluirLocal' + i + '" class="btn btn-danger btn-xs" value="' + local[i].idLocal + '">Excluir</button> ' +
                '</tr>');
        $('#editarLocal' + i).click(function () {
            //alert("opa");
            editarLocal($(this).val());
        });
        
        $('#excluirLocal' + i).click(function () {
            //alert("opa");
            excluirLocal($(this).val());
        });
    }

});

function editarLocal(idLocal) {
    $.post("http://localhost/eventos/Local/buscar_local", {idLocal: idLocal}, function (retorno) {
        var resultado = eval(retorno);
        $('#idLocal').val(resultado[0].idLocal);
        $("#div-idLocal").css("display", "none");
        $('#nomeLocal').val(resultado[0].nomeLocal);
        $('#tipoLocal').val(resultado[0].tipoLocal);
        $('#andarLocal').val(resultado[0].andarLocal);
        $('#totalAssentosLocal').val(resultado[0].totalAssentosLocal);
        $('#tipoAssentosLocal').val(resultado[0].tipoAssentosLocal);
        $('#modal_edita_local').modal('show');
    });
}

function excluirLocal(idLocal){
    $.post("http://localhost/eventos/Local/buscar_local", {idLocal: idLocal}, function (retorno) {
        var resultado = eval(retorno); 
        $("#modalLabelExcluiLocal").text("Excluir Local");
        $('#idLocalExcluiLocal').val(resultado[0].idLocal);
        $("#div-idExcluiLocal").css("display", "none");        
        $('#modal_exclui_local').modal('show');
    });
}

