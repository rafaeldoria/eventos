<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
        <!--<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">-->

        <!-- Website CSS style -->
        <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
        <!--<link rel="stylesheet" type="text/css" href="assets/css/main.css">-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <script type="text/javascript"> 
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
        </script>

        <title>Cadastrar</title>
    </head>
    <body>
    <body>
        <div class="container" style="margin-top: 5%;">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Realizar Cadastro</div>
                    <div class="panel-body">

                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                <h2 class="title">IBS Eventos</h2>
                                <hr />
                            </div>
                        </div> 

                        <!-- Login Form -->
                        <?php
                        echo form_open("Usuario/novo_usuario");
                        ?>
                        <!-- Username Field -->
                        <div class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="nomeUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Nome:</label>
                                <div class="input-group">
                                    <input class="form-control" id="nomeUsuario" type="text" name="nomeUsuario" placeholder="Informe seu nome" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="emailUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Email:</label>
                                <div class="input-group">
                                    <input class="form-control" id="emailUsuario" type="email" name="emailUsuario" placeholder="Informe seu e-mail" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="telefoneUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Telefone Celular (xxxxx-xxxx):</label>
                                <div class="input-group">
                                    <input class="form-control" id="telefoneUsuario" type="tel" pattern="^\d{5}-\d{4}$" name="telefoneUsuario" placeholder="Informe telefone para contato" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="ramalUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Ramal (xxx):</label>
                                <div class="input-group">
                                    <input class="form-control" id="ramlUsuario" type="tel" pattern="^\d{3}$" name="ramalUsuario" placeholder="Informe o seu ramal" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="loginUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Usuário:</label>
                                <div class="input-group">
                                    <input class="form-control" id="loginUsuario" type="text" name="loginUsuario" placeholder="Informe seu usuário" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="senhaUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Senha:</label>
                                <div class="input-group">
                                    <input class="form-control" id="senhaUsuario" type="password" name="senhaUsuario" placeholder="Informe sua senha" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="senhaUsuario2"><span class="text-danger" style="margin-right:5px;">*</span>Confirmar Senha:</label>
                                <div class="input-group">
                                    <input onkeyup="verificarSenha();" class="form-control" id="senhaUsuario2" type="password" name="senhaUsuario2" placeholder="Confirme sua senha" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p id="resultado"></p>
                        <div class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="tipoUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Selecione Tipo Usuário:</label>
                                <div class="input-group">
                                    <select class="form-control" id="tipoUsuario" name="tipoUsuario" onchange='retorna_tiposUsuarios($(this).val())' />
                                    <option><?php echo $tipoDeUsuario ?></option>                                        
                                    </select>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>                         
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button" >Cadastrar</button>
                        </div>
                        <div class="login-register">
                            <?= anchor('Login', 'Login') ?>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                console.log(document.querySelector('#tipoUsuario'));
            </script>
            <script type="text/javascript" src="assets/js/bootstrap.js"></script>            
    </body>
</html>
