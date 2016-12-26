function excluirUsuario(idUsuario) {

    $.post("http://localhost/eventos/Usuario/retorna_usuario", {idUsuario: idUsuario}, function (retorno) {
        var resultado = eval(retorno); 
        $("#modalLabelExclui").text("Excluir Usuário");
        $('#idUsuarioExclui').val(resultado[0].idUsuario);
        $("#div-idExclui").css("display", "none");
        $('#nomeUsuarioExclui').val(resultado[0].nomeUsuario);
        $('#modal_exclui').modal('show');
    });
}

function editarUsuario(idUsuario) {

    $.post("http://localhost/eventos/Usuario/buscar_usuario", {idUsuario: idUsuario}, function (retorno) {
        var resultado = eval(retorno);
        $("#modalLabel").text("Editar Usuário");
        $('#idUsuario').val(resultado[0].idUsuario);
        $("#div-id").css("display", "none");
        $('#nomeUsuario').val(resultado[0].nomeUsuario);
        $('#emailUsuario').val(resultado[0].emailUsuario);
        $('#telefoneUsuario').val(resultado[0].telefoneUsuario);
        $('#loginUsuario').val(resultado[0].loginUsuario);
        $('#ramalUsuario').val(resultado[0].ramalUsuario);
        $('#setorUsuario').val(resultado[0].setorUsuario);         
        $('#modal_edita').modal('show');
    });
}

$.getJSON("http://localhost/eventos/Usuario/lista_usuarios", function (retorno) {
    var usuario = eval(retorno);
    for (var i = 0; i < usuario.length; i++) {
        $('#tabelaUsuarios').append('<tr>' +
                '<td>' + usuario[i].idUsuario + '</td>' +
                '<td>' + usuario[i].nomeUsuario + '</td>' +
                '<td>' + usuario[i].telefoneUsuario + '</td>' +
                '<td>' + usuario[i].emailUsuario + '</td>' +
                '<td>' + usuario[i].loginUsuario + '</td>' +
                '<td>' + usuario[i].senhaUsuario + '</td>' +
                '<td>' + usuario[i].ramalUsuario + '</td>' +
                '<td>' + usuario[i].setorUsuario + '</td>' +
                '<td><button id="editarUsuario' + i + '" class="btn btn-warning btn-xs" value="' + usuario[i].idUsuario + '">Editar</button> ' +
                '<button id="excluirUsuario' + i + '" class="btn btn-danger btn-xs" value="' + usuario[i].idUsuario + '">Excluir</button> ' +
                '</tr>');
        $('#excluirUsuario' + i).click(function () {
            //alert("opa");
            excluirUsuario($(this).val());
        });

        $('#editarUsuario' + i).click(function () {
            //alert("opa");
            editarUsuario($(this).val());
        });

    }

});


console.log(document.querySelector('#tipoUsuario'));

function verificarSenha() {
    var campo1 = document.getElementById("senhaUsuario").value;
    var campo2 = document.getElementById("senhaUsuario2").value;
    if (campo1 == campo2) {
        document.getElementById("resultado").innerHTML = "&raquo; OK!";
        document.getElementById("resultado").style.color = "#008B45";
    } else {
        document.getElementById("resultado").innerHTML = "As senhas não correspondem!";
        document.getElementById("resultado").style.color = "#FF6347";
    }
}







