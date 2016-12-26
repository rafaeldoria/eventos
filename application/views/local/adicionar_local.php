<title>Adicionar Local/Espaço</title>

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
                <form role="form" method="post" action="<?= base_url('Local/novo_local') ?>" id="formulario_adicionar">
                <!-- Username Field -->
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="nomeLocal"><span class="text-danger" style="margin-right:5px;">*</span>Nome Local:</label>
                        <div class="input-group">
                            <input class="form-control" id="nomeLocal" type="text" name="nomeLocal" placeholder="Informe nome local" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="tipoLocal"><span class="text-danger" style="margin-right:5px;">*</span>Tipo Local:</label>
                        <div class="input-group">
                            <input class="form-control" id="tipoLocal" type="text" name="tipoLocal" placeholder="Ex.: sala, auditório" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="andarLocal"><span class="text-danger" style="margin-right:5px;">*</span>Andar: </label>
                        <div class="input-group">
                            <input class="form-control" id="andarLocal" type="text" name="andarLocal" placeholder="Informe andar do local" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-resize-vertical" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="totalAssentosLocal"><span class="text-danger" style="margin-right:5px;">*</span>Total de Assentos:</label>
                        <div class="input-group">
                            <input class="form-control" id="totalAssentosLocal" type="number" name="totalAssentosLocal" placeholder="Informe o seu total de assentos" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="tipoAssentosLocal"><span class="text-danger" style="margin-right:5px;">*</span>Tipo de Asssento:</label>
                        <div class="input-group">
                            <input class="form-control" id="tipoAssentosLocal" type="text" name="tipoAssentosLocal" placeholder="Informe seu usuário" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></label>
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