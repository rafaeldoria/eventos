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
                <form role="form" method="post" action="<?= base_url('Fornecedor/novo_fornecedor') ?>" id="formulario_adicionar">
                <!-- Username Field -->
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="nomeFornecedor"><span class="text-danger" style="margin-right:5px;">*</span>Nome do Fornecedor:</label>
                        <div class="input-group">
                            <input class="form-control" id="nomeFornecedor" type="text" name="nomeFornecedor" placeholder="Informe nome do fornecedor" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>                
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="cnpjFornecedor"><span class="text-danger" style="margin-right:5px;">*</span>CNPJ do Fornecedor:</label>
                        <div class="input-group">
                            <input class="form-control" id="cnpjFornecedor" type="text" name="cnpjFornecedor" placeholder="Informe CNPJ do fornecedor" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="enderecoFornecedor"><span class="text-danger" style="margin-right:5px;">*</span>Endereço do fornecedor:</label>
                        <div class="input-group">
                            <input class="form-control" id="enderecoFornecedor" type="text" name="enderecoFornecedor" placeholder="Informe endereço do fornecedor" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-road" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="telefoneFornecedor"><span class="text-danger" style="margin-right:5px;">*</span>Telefone Fornecedor (xxxx-xxxx):</label>
                        <div class="input-group">
                            <input class="form-control" id="telefoneFornecedor" type="tel" pattern="^\d{4}-\d{4}$" name="telefoneFornecedor" placeholder="Informe telefone para contato" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></label>
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