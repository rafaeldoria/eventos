//lista tabela professores
$.getJSON("http://localhost:8090/eventos/Professor/lista_professores", function (retorno) {
    var professor = eval(retorno);
    for (var i = 0; i < professor.length; i++) {
        $('#tabelaProfessores').append('<tr>' +
                '<td style="display:none">' + professor[i].idProfessor+ '</td>' +
                '<td>' + professor[i].nomeProfessor + '</td>' +
                '<td>' + professor[i].emailProfessor + '</td>' +
                '<td>' + professor[i].celularProfessor + '</td>' +
                '<td>' + professor[i].observacaoProfessor + '</td>' +                
                '<td><button id="editarProfessor' + i + '" class="btn btn-warning btn-xs" value="' + professor[i].idProfessor + '">Editar</button> ' +
                '<button id="excluirProfessor' + i + '" class="btn btn-danger btn-xs" value="' + professor[i].idProfessor + '">Excluir</button> ' +
                '</tr>');
        $('#editarProfessor' + i).click(function () {
           //alert("opa");
           editarProfessor($(this).val());
        });
        $('#excluirProfessor' + i).click(function () {
           //alert("opa");
           excluirProfessor($(this).val());
        });
    }
});

//edtiar Professor
function editarProfessor(idProfessor) {
    $.post("http://localhost:8090/eventos/Professor/buscar_professor", {idProfessor: idProfessor}, function (retorno) {
        var resultado = eval(retorno);   
        $("#modalLabelProfessor").text("Editar Dados Professor "+resultado[0].nomeProfessor);
        $('#idProfessor').val(resultado[0].idProfessor);
        $("#div-idProfessor").css("display", "none");        
        $('#nomeProfessor').val(resultado[0].nomeProfessor);
        $('#emailProfessor').val(resultado[0].emailProfessor);
        $('#celularProfessor').val(resultado[0].celularProfessor);
        $('#observacaoProfessor').val(resultado[0].observacaoProfessor);
        $('#modal_edita_professor').modal('show');
    });
}

//excluir Professor
function excluirProfessor(idProfessor){
    $.post("http://localhost:8090/eventos/Professor/buscar_professor", {idProfessor: idProfessor}, function(retorno){
        var resultado = eval(retorno);        
        $("#modalLabelExcluiProfessor").text("Excluir Professor");
        $('#idExcluiProfessor').val(resultado[0].idProfessor);
        $("#div-idExcluiProfessor").css("display", "none");  
        $("#excluirProfessor").text("Deseja realmente excluir "+resultado[0].nomeProfessor+"?")
        $('#modal_exclui_professor').modal('show');
    });
}