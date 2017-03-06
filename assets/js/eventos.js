function excluirSetor(idSetor) {

    $.post("http://localhost:8090/eventos/Setor/buscar_setor", {idSetor: idSetor}, function (retorno) {
        var resultado = eval(retorno);         
        $('#idExcluiSetor').val(resultado[0].idSetor);
        $("#div-idExcluiSetor").css("display", "none");  
        $("#excluirSetor").text("Deseja realmente excluir "+resultado[0].nomeSetor+"?");
        $('#modal_exclui_Setor').modal('show');
    });
}

function editarSetor(idSetor) {

    $.post("http://localhost:8090/eventos/Setor/buscar_setor", {idSetor: idSetor}, function (retorno) {
        var resultado = eval(retorno); 
        $("#modalLabelSetor").text("Editar Setor "+ resultado[0].nomeSetor);
        $('#idSetor').val(resultado[0].idSetor);
        $("#div-idSetor").css("display", "none");
        $('#nomeSetor').val(resultado[0].nomeSetor);
        $('#responsavelSetor').val(resultado[0].responsavelSetor);
        $('#observacaoSetor').val(resultado[0].observacaoSetor);        
        $('#modal_edita_Setor').modal('show');
    });
}

$.getJSON("http://localhost:8090/eventos/Setor/lista_setores", function (retorno) {
    var setor = eval(retorno);
    for (var i = 0; i < setor.length; i++) {
        $('#tabelatEventos').append('<tr>' +
                '<td style="display:none">' + setor[i].idSetor + '</td>' +
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

//função para preencher select tipo de eventos
$.getJSON("http://localhost:8090/eventos/TiposEventos/lista_tipoEventos", function (retorno) {
    var tipos = eval(retorno);
    for (var i = 0; i < tipos.length; i++) {
        $('#tipoEvento').append(                                
                '<option>' + tipos[i].nomeTipoEvento + '</option>' +
                '</select>');
    }
}); 

//função para preencher select nomes professores
$.getJSON("http://localhost:8090/eventos/Professor/lista_professores", function (retorno) {
    var professores = eval(retorno);
    for (var i = 0; i < professores.length; i++) {
        $('#nomeProfessor').append(                                
                '<option>' + professores[i].nomeProfessor + '</option>' +
                '</select>');
    }
});  

//função para preencher select responsaveis eventos
$.getJSON("http://localhost:8090/eventos/Empresa/lista_empresas", function (retorno) {
    var responsavel = eval(retorno);
    for (var i = 0; i < responsavel.length; i++) {
        $('#responsavelEmpresa').append(                                
                '<option>' + responsavel[i].responsavelEmpresa + '</option>' +
                '</select>');
    }
});

//função para buscar locais
$.getJSON("http://localhost:8090/eventos/Local/lista_locais", function (retorno) {
    var local = eval(retorno);
    for (var i=0; i <local.length; i++){
        $('#nomeLocal').append(
                '<option>' + local[i].nomeLocal + '</option>' +
                '</select>');
    }
});

//função para preencher select responsaveis eventos
$.getJSON("http://localhost:8090/eventos/Turma/lista_turmas", function (retorno) {
    var turma = eval(retorno);
    for (var i = 0; i < turma.length; i++) {
        $('#nomeTurma').append(                                
                '<option>' + turma[i].nomeTurma + '</option>' +
                '</select>');
    }
});

//on change exibir/ocultar campos
$('#tipoEvento').on('change', function() {
  var select = $(this).find('option:selected').text().trim();
  if(select == 'MBA') {
  	document.getElementById("mbaProfessor").style.display = "block";
        document.getElementById("eventosResponsavel").style.display = "none";
        document.getElementById("mbaTurma").style.display = "block";
        document.getElementById("nomeDoEvento").style.display = "none";
  }
  else if(select == 'Espaço Empresarial') {
  	document.getElementById("eventosResponsavel").style.display = "block";
        document.getElementById("mbaProfessor").style.display = "none";
        document.getElementById("mbaTurma").style.display = "none";
        document.getElementById("nomeDoEvento").style.display = "block";
  }
});









