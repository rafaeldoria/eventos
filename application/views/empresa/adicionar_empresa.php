<title>Cadastrar Empresa</title>

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
                <form role="form" method="post" action="<?= base_url('Empresa/nova_empresa') ?>" id="formulario_adicionar">
                <!-- Username Field -->
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="nomeEmpresa"><span class="text-danger" style="margin-right:5px;">*</span>Nome da Empresa:</label>
                        <div class="input-group">
                            <input class="form-control" id="nomeEmpresa" type="text" name="nomeEmpresa" placeholder="Informe nome da empresa" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>                
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="telefoneEmpresa"><span class="text-danger" style="margin-right:5px;">*</span>Telefone Empresa (xxxx-xxxx):</label>
                        <div class="input-group">
                            <input class="form-control" id="telefoneEmpresa" type="tel" pattern="^\d{4}-\d{4}$" name="telefoneEmpresa" placeholder="Informe telefone da empresa" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="responsavelEmpresa"><span class="text-danger" style="margin-right:5px;">*</span>Nome do Responsável para Contato: </label>
                        <div class="input-group">
                            <input class="form-control" id="responsavelEmpresa" type="text" name="responsavelEmpresa" placeholder="Nome do responsável por contato com empresa" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="celularEmpresa"><span class="text-danger" style="margin-right:5px;">*</span>Telefone Celular Responsável(xxxxx-xxxx):</label>
                        <div class="input-group">
                            <input class="form-control" id="celularEmpresa" type="tel" pattern="^\d{5}-\d{4}$" name="celularEmpresa" placeholder="Informe celular para contato com responsável" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="emailEmpresa"><span class="text-danger" style="margin-right:5px;">*</span>Email do Responsável:</label>
                        <div class="input-group">
                            <input class="form-control" id="emailEmpresa" type="email" name="emailEmpresa" placeholder="Informe e-mail do responsável" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>                                      
                <div class="form-group ">
                    <button id="botao_cadastrar" type="submit" class="btn btn-primary btn-lg btn-block login-button" >Adicionar</button>
                </div>                
                </form>
            </div>
        </div>
    </div>
</div>    