

<title>Eventos</title>
</head>
<body>
    <?php if ($this->session->flashdata("success")) : ?>
        <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
    <?php endif ?>

    <?php if ($this->session->flashdata("danger")) : ?>
        <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
    <?php endif ?>

    <div class="container" style="margin-top: 5%;">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-body">

                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h2 class="title">IBS Eventos</h2>
                            <hr />
                        </div>
                    </div> 

                    <!-- Login Form -->
                    <?php
                    echo form_open("login/autenticar");
                    ?>
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
                            <?= anchor('Usuario/cadastrar_usuario', 'Cadastrar', array("class" => "btn btn-primary")); ?></li>                            
                        </div>
                    </div>                            

                    </form>
                    <!-- End of Login Form -->

                </div>
            </div>
        </div>

        
</body>
</html>
