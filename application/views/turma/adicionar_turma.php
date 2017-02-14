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
                <form role="form" method="post" action="<?= base_url('Turma/nova_turma') ?>" id="formulario_adicionar">
                <!-- Username Field -->
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="nomeTurma"><span class="text-danger" style="margin-right:5px;">*</span>Nome Turma:</label>
                        <div class="input-group">
                            <input class="form-control" id="nomeTurma" type="text" name="nomeTurma" placeholder="Informe nome da turma" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="totalAlunosTurma"><span class="text-danger" style="margin-right:5px;">*</span>Total de Alunos:</label>
                        <div class="input-group">
                            <input class="form-control" id="totalAlunosTurma" type="number" name="totalAlunosTurma" placeholder="Informe total de alunos" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">                          
                    <div class="form-group col-xs-12">
                        <label for="observacaoTurma"><span class="text-danger" style="margin-right:5px;">*</span>Observações:</label>
                        <div class="input-group">
                            <textarea class="form-control" id="observacaoTurma" name="observacaoTurma"  rows="3"/>Sem Obervações</textarea>
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