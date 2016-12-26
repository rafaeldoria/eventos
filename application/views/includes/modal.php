<!-- Modal Edita Usuario-->
<div class="modal fade" id="modal_edita" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->

                <!-- Username Field -->
                <form role="form" method="post" action="<?= base_url('Usuario/editar_usuario') ?>" id="formulario_editar">
                    <div id="form_modal">
                        <div id="div-id" class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="idUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Id:</label>
                                <div class="input-group">
                                    <input class="form-control" id="idUsuario" type="text" name="idUsuario" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>                    
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
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button" >Atualizar</button>                    
                        </div>                
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
<!-- fim modal edita usuário-->


<!-- Modal Exclui usuário -->
<div class="modal fade" id="modal_exclui" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabelExclui"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->
                <form role="form" method="post" action="<?= base_url('Usuario/excluir_usuario') ?>" id="formulario_excluir">
                    <div id="form_modal">
                        <div id="div-idExclui" class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="idUsuarioExclui"><span class="text-danger" style="margin-right:5px;">*</span>Id:</label>
                                <div class="input-group">
                                    <input class="form-control" id="idUsuarioExclui" type="text" name="idUsuarioExclui" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p> Deseja realmente excluir Usuário? </p>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Sim</button>
                            <button class="btn btn-default" data-dismiss="modal">N&atilde;o</button>  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fim modal exclui usuário -->

<!-- Modal Edita Local-->
<div class="modal fade" id="modal_edita_local" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Editar local</h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->

                <!-- Username Field -->
                <form role="form" method="post" action="<?= base_url('Local/editar_local') ?>" id="formulario_editar">
                    <div id="div-idLocal" class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="idLocal"><span class="text-danger" style="margin-right:5px;">*</span>Id Local:</label>
                            <div class="input-group">
                                <input class="form-control" id="idLocal" type="text" name="idLocal" placeholder="Informe nome local" required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
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
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-button" >Atualizar</button>                    
                    </div>                
            </div>
            </form>
        </div>
    </div>
</div>   
<!-- fim modal edita local -->

<!-- Modal Exclui usuário -->
<div class="modal fade" id="modal_exclui_local" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabelExcluiLocal"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->
                <form role="form" method="post" action="<?= base_url('Local/excluir_local') ?>" id="formulario_excluir">
                    <div id="form_modal">
                        <div id="div-idExcluiLocal" class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="idLocalExcluiLocal"><span class="text-danger" style="margin-right:5px;">*</span>Id:</label>
                                <div class="input-group">
                                    <input class="form-control" id="idLocalExcluiLocal" type="text" name="idLocalExcluiLocal" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p> Deseja realmente excluir Usuário? </p>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Sim</button>
                            <button class="btn btn-default" data-dismiss="modal">N&atilde;o</button>  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fim modal exclui usuário -->