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
                <form role="form" method="post" action="<?= base_url('Professor/novo_professor') ?>" id="formulario_adicionar">
                <!-- Username Field -->
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="nomeProfessor"><span class="text-danger" style="margin-right:5px;">*</span>Nome do Professor:</label>
                        <div class="input-group">
                            <input class="form-control" id="nomeProfessor" type="text" name="nomeProfessor" placeholder="Informe nome do professor" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="emailProfessor"><span class="text-danger" style="margin-right:5px;">*</span>E-mail Professor:</label>
                        <div class="input-group">
                            <input class="form-control" id="emailProfessor" type="email" name="emailProfessor" placeholder="e-mail professor" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="celularProfessor"><span class="text-danger" style="margin-right:5px;">*</span>Celular Professor: ((xx)xxxxx-xxxx)</label>
                        <div class="input-group">
                            <input class="form-control" id="celularProfessor" type="text" name="celularProfessor" pattern="^\(\d{2}\)\d{5}-\d{4}$" placeholder="Informe celular professor" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="observacaoProfessor"><span class="text-danger" style="margin-right:5px;">*</span>Observações:</label>
                        <div class="input-group">
                            <textarea class="form-control" id="observacaoProfessor" name="observacaoProfessor" rows="3"/>Sem Obervações</textarea>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-hand-left" aria-hidden="true"></label>
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