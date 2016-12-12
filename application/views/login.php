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

        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

        <title>Eventos</title>
    </head>
    <body>
        <div class="container" style="margin-top: 5%;">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">

                        <!-- Login Form -->
                        <form role="form">

                            <!-- Username Field -->
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Usuário:</label>
                                    <div class="input-group">
                                        <input class="form-control" id="username" type="text" name="username" placeholder="usuário" required/>
                                        <span class="input-group-btn">
                                            <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                                        </span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Content Field -->
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="password"><span class="text-danger" style="margin-right:5px;">*</span>Senha:</label>
                                    <div class="input-group">
                                        <input class="form-control" id="password" type="password" name="password" placeholder="senha" required/>
                                        <span class="input-group-btn">
                                            <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                                        </span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Login Button -->
                            <div class="row">
                                <div class="form-group col-xs-8">
                                    <button class="btn btn-primary" type="submit">Logar</button>
                                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                                </div>
                            </div>                            

                        </form>
                        <!-- End of Login Form -->

                    </div>
                </div>
            </div>

            <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    </body>
</html>
