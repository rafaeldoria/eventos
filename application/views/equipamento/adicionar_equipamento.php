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
                <form role="form" method="post" action="<?= base_url('Equipamento/novo_equipamento') ?>" id="formulario_adicionar">
                <!-- Username Field -->
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="nomeEquipamento"><span class="text-danger" style="margin-right:5px;">*</span>Nome do Equipamento:</label>
                        <div class="input-group">
                            <input class="form-control" id="nomeEquipamento" type="text" name="nomeEquipamento" placeholder="Informe nome do equipamento" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>                
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="tipoEquipamento"><span class="text-danger" style="margin-right:5px;">*</span>Tipo Equipamento:</label>
                        <div class="input-group">
                            <input class="form-control" id="tipoEquipamento" type="text" name="tipoEquipamento" placeholder="Informe tipo de equipamento" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="marcaEquipamento"><span class="text-danger" style="margin-right:5px;">*</span>Marca do Equipamento:</label>
                        <div class="input-group">
                            <input class="form-control" id="marcaEquipamento" type="text" name="marcaEquipamento" placeholder="Marca do equipamento" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="serieEquipamento"><span class="text-danger" style="margin-right:5px;">*</span>Número de série de equipamento:</label>
                        <div class="input-group">
                            <input class="form-control" id="serieEquipamento" type="text" name="serieEquipamento" placeholder="Número de série do equipamento" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="patrimonioEquipamento"><span class="text-danger" style="margin-right:5px;">*</span>Número de patrimônio do equipamento:</label>
                        <div class="input-group">
                            <input class="form-control" id="patrimonioEquipamento" type="number" name="patrimonioEquipamento" placeholder="Número de patrimônio do equipamento" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></label>
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