$.getJSON("http://localhost:8090/eventos/Empresa/lista_empresas", function (retorno) {
    var empresa = eval(retorno);
    for (var i = 0; i < empresa.length; i++) {
        $('#tabelaEmpresas').append('<tr>' +
                '<td style="display:none">' + empresa[i].idEmpresa + '</td>' +
                '<td>' + empresa[i].nomeEmpresa + '</td>' +
                '<td>' + empresa[i].telefoneEmpresa + '</td>' +
                '<td>' + empresa[i].responsavelEmpresa + '</td>' +
                '<td>' + empresa[i].celularEmpresa + '</td>' +
                '<td>' + empresa[i].emailEmpresa + '</td>' +
                '<td><button id="editarEmpresa' + i + '" class="btn btn-warning btn-xs" value="' + empresa[i].idEmpresa + '">Editar</button> ' +
                '<button id="excluirEmpresa' + i + '" class="btn btn-danger btn-xs" value="' + empresa[i].idEmpresa + '">Excluir</button> ' +
                '</tr>');
        $('#editarEmpresa' + i).click(function () {
            //alert("opa");
            editarEmpresa($(this).val());
        });
        
        $('#excluirEmpresa' + i).click(function () {
            //alert("opa");
            excluirEmpresa($(this).val());
        });
    }

});

function editarEmpresa(idEmpresa) {
    $.post("http://localhost:8090/eventos/Empresa/buscar_empresa", {idEmpresa: idEmpresa}, function (retorno) {
        var resultado = eval(retorno); 
        $("#modalLabelEmpresa").text("Editar Empresa "+ resultado[0].nomeEmpresa);
        $('#idEmpresa').val(resultado[0].idEmpresa);
        $("#div-idEmpresa").css("display", "none");
        $('#nomeEmpresa').val(resultado[0].nomeEmpresa);
        $('#telefoneEmpresa').val(resultado[0].telefoneEmpresa);
        $('#responsavelEmpresa').val(resultado[0].responsavelEmpresa);
        $('#celularEmpresa').val(resultado[0].celularEmpresa);
        $('#emailEmpresa').val(resultado[0].emailEmpresa);
        $('#modal_edita_empresa').modal('show');
    });
}

function excluirEmpresa(idEmpresa){
    $.post("http://localhost:8090/eventos/Empresa/buscar_empresa", {idEmpresa: idEmpresa}, function (retorno) {
        var resultado = eval(retorno);                         
        $('#idEmpresaExclui').val(resultado[0].idEmpresa);
        $("#div-idExcluiEmpresa").css("display", "none"); 
        $("#excluirEmpresa").text("Deseja realmente excluir "+resultado[0].nomeEmpresa+"?");  
        $('#modal_exclui_empresa').modal('show');
    });
}

