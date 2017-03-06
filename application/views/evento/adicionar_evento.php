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
                <form role="form" method="post" action="<?= base_url('Evento/novo_evento') ?>" id="formulario_adicionar">
                    <!-- Username Field -->
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="tipoEvento"><span class="text-danger" style="margin-right:5px;">*</span>Selecione Tipo de Evento:</label>
                            <div class="input-group">
                                <select class="form-control" id="tipoEvento" name="tipoEvento"></select>                            
                                <span class="input-group-btn">
                                    <label class="btn btn-primary"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="mbaTurma" style="display:block">                          
                        <div class="form-group col-xs-12">
                            <label for="nomeTurma"><span class="text-danger" style="margin-right:5px;">*</span>Nome Turma:</label>
                            <div class="input-group">
                                <select class="form-control" id="nomeTurma" name="nomeTurma"></select>                                
                                <span class="input-group-btn">
                                    <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="nomeDoEvento" style="display:none">                          
                        <div class="form-group col-xs-12">
                            <label for="nomeEvento"><span class="text-danger" style="margin-right:5px;">*</span>Nome Evento:</label>
                            <div class="input-group">
                                <input class="form-control" id="nomeEvento" type="text" name="nomeEvento" placeholder="Informe nome do evento" />
                                <span class="input-group-btn">
                                    <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="mbaProfessor" style="display:block">                          
                        <div class="form-group col-xs-12">
                            <label for="nomeProfessor"><span class="text-danger" style="margin-right:5px;">*</span>Nome do Professor:</label>
                            <div class="input-group">
                                <select class="form-control" id="nomeProfessor" name="nomeProfessor"></select>
                                <span class="input-group-btn">
                                    <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="eventosResponsavel" style="display:none">                          
                        <div class="form-group col-xs-12">
                            <label for="responsavelEmpresa"><span class="text-danger" style="margin-right:5px;">*</span>Nome responsável pelo Eventos:</label>
                            <div class="input-group">
                                <select class="form-control" id="responsavelEmpresa" name="responsavelEmpresa"></select>
                                <span class="input-group-btn">
                                    <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="dataEvento"><span class="text-danger" style="margin-right:5px;">*</span>Selecione Data Evento</label>
                            <div class="input-group">
                                <input class="form-control" id="dataEvento" type="date"  name="dataEvento" placeholder="Informe data do Evento" required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-primary"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div> 
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="nomeLocal"><span class="text-danger" style="margin-right:5px;">*</span>Nome Local:</label>
                            <div class="input-group">
                                <select class="form-control" id="nomeLocal" name="nomeLocal"></select>                            
                                <span class="input-group-btn">
                                    <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <label for="periodoEvento"><span class="text-danger" style="margin-right:5px;">*</span>Selecione período(s) evento:</label>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></label>
                            </span>  
                            </span>
                            <div class="input-group">
                                <div class="checkbox">
                                    <label><input type="checkbox" id="periodoEvento[]" name="periodoEvento[]" value="manha">Manhã</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="periodoEvento[]" name="periodoEvento[]" value="tarde">Tarde</label>
                                </div>
                                <div class="checkbox disabled">
                                    <label><input type="checkbox" id="periodoEvento[]" name="periodoEvento[]" value="noite">Noite</label>
                                </div>
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