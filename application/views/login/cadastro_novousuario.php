<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>"> 
                <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
                    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.css') ?>">  
                        <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">  
                            <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
                            <script src="<?= base_url('assets/js/jquery-1.10.2.js') ?>"></script>
                            <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>  
                            <script src="<?= base_url('js/aplicacao/usuario.js') ?>"></script>  
                            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
                            <title>IBS EVENTOS SISTEMA</title>
                            </head>
                            <body>
                                <div id="wrapper">
                                    <div class="navbar navbar-inverse navbar-fixed-top">
                                        <div class="adjust-nav">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand" href="<?= base_url('home') ?>">
                                                    <img src="<?= base_url('assets/img/logoibs.png') ?>" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="page-wrapper" >
                                    <div id="page-inner">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div id="main" class="container-fluid" style="margin-top: 50px">
                                                    <title>Cadastrar</title>

                                                    <div class="container">
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
                                                                    echo form_open("Usuario/novo_cadastro");
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
                                                                                <input class="form-control" id="ramalUsuario" type="tel" pattern="^\d{3}$" name="ramalUsuario" placeholder="Informe o seu ramal" required/>
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
                                                                            <label for="setorUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Selecione Setor:</label>
                                                                            <div class="input-group">
                                                                                <select class="form-control" id="selectSetor" name="setorUsuario"></select>                            
                                                                                <span class="input-group-btn">
                                                                                    <label class="btn btn-primary"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></label>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>                         
                                                                    <div class="form-group ">
                                                                        <button id="botao_cadastrar" type="submit" class="btn btn-primary btn-lg btn-block login-button" >Cadastrar</button>
                                                                    </div>                                                                    
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">


                                    <div class="row">
                                        <div class="col-lg-12" >
                                            &copy;  ibs.edu.br | Design by: <a href="rafael.doria@ibs.edu.br" style="color:#fff;" target="_blank">rafael.doria@ibs.edu.br</a>
                                        </div>
                                    </div>
                                </div>
                            </body>
                            </html>

                            <!-- /. WRAPPER  -->
                            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
                            <!-- JQUERY SCRIPTS -->
                            <script src="assets/js/jquery-1.10.2.js"></script>
                            <!-- BOOTSTRAP SCRIPTS -->
                            <script src="assets/js/bootstrap.min.js"></script>
                            <!-- CUSTOM SCRIPTS -->
                            <script src="assets/js/custom.js"></script>
                            console.log(document.querySelector('#tipoUsuario'));
                            <script src="<?= base_url('assets/js/usuarios.js') ?>"></script>
