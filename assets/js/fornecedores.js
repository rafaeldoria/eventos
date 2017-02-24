//lista tabela fornecedores
$.getJSON("http://localhost/eventos/Fornecedor/lista_fornecedores", function (retorno) {
    var fornecedor = eval(retorno);
    for (var i = 0; i < fornecedor.length; i++) {
        $('#tabelaFornecedores').append('<tr>' +
                '<td style="display:none">' + fornecedor[i].idFornecedor + '</td>' +
                '<td>' + fornecedor[i].nomeFornecedor + '</td>' +
                '<td>' + fornecedor[i].cnpjFornecedor + '</td>' +
                '<td>' + fornecedor[i].telefoneFornecedor + '</td>' +
                '<td>' + fornecedor[i].enderecoFornecedor + '</td>' +
                '<td><button id="editarFornecedor' + i + '" class="btn btn-warning btn-xs" value="' + fornecedor[i].idFornecedor + '">Editar</button> ' +
                '<button id="excluirFornecedor' + i + '" class="btn btn-danger btn-xs" value="' + fornecedor[i].idFornecedor + '">Excluir</button> ' +
                '</tr>');
        
        $('#editarFornecedor' + i).click(function () {
            //alert("opa");
            editarFornecedor($(this).val());
        });
        
        $('#excluirFornecedor' + i).click(function () {
            //alert("opa");
            excluirFornecedor($(this).val());
        });        
    }

});

//editar fornecedor
function editarFornecedor(idFornecedor) {    
    $.post("http://localhost/eventos/Fornecedor/buscar_fornecedor", {idFornecedor: idFornecedor}, function (retorno) {
        var resultado = eval(retorno);
        $("#modalLabelFornecedor").text("Editar Fornecedor "+ resultado[0].nomeFornecedor);
        $('#idFornecedor').val(resultado[0].idFornecedor);
        $("#div-idFornecedor").css("display", "none");
        $('#nomeFornecedor').val(resultado[0].nomeFornecedor);
        $('#cnpjFornecedor').val(resultado[0].cnpjFornecedor);
        $('#telefoneFornecedor').val(resultado[0].telefoneFornecedor);
        $('#enderecoFornecedor').val(resultado[0].enderecoFornecedor);        
        $('#modal_edita_fornecedor').modal('show');
    });
}

function excluirFornecedor(idFornecedor) {

    $.post("http://localhost/eventos/Fornecedor/buscar_fornecedor", {idFornecedor: idFornecedor}, function (retorno) {
        var resultado = eval(retorno); 
        $("#modalLabelExcluiFornecedor").text("Excluir Fornecedor");
        $('#idFornecedorExclui').val(resultado[0].idFornecedor);
        $("#div-idExcluiFornecedor").css("display", "none");
        $('#nomeFornecedorExclui').val(resultado[0].nomeFornecedor);
        $("#excluirFornecedor").text("Deseja realmente excluir "+resultado[0].nomeFornecedor+"?"); 
        $('#modal_exclui_fornecedor').modal('show');
    });
}

