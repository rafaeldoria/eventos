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

<!-- Modal Exclui local -->
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
                        <p> Deseja realmente excluir esse Local? </p>
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

<!-- Modal Edita Empresa-->
<div class="modal fade" id="modal_edita_empresa" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Editar empresa</h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->

                <!-- Username Field -->
                <form role="form" method="post" action="<?= base_url('Empresa/editar_empresa') ?>" id="formulario_editar">
                    <div id="div-idEmpresa" class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="idEmpresa"><span class="text-danger" style="margin-right:5px;">*</span>Id Local:</label>
                            <div class="input-group">
                                <input class="form-control" id="idEmpresa" type="text" name="idEmpresa" placeholder="Informe nome local" required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
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
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-button" >Atualizar</button>                    
                    </div> 
                </form>
            </div>
        </div>
    </div>  
</div>
<!-- fim modal edita empresa -->

<!-- Modal Exclui empresa -->
<div class="modal fade" id="modal_exclui_empresa" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabelExcluiEmpresa"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->
                <form role="form" method="post" action="<?= base_url('Empresa/excluir_empresa') ?>" id="formulario_excluir">
                    <div id="form_modal">
                        <div id="div-idExcluiEmpresa" class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="idEmpresaExclui"><span class="text-danger" style="margin-right:5px;">*</span>Id:</label>
                                <div class="input-group">
                                    <input class="form-control" id="idEmpresaExclui" type="text" name="idEmpresaExclui" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p> Deseja realmente excluir Empresa? </p>
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
<!-- Fim modal exclui empresa -->

<!-- Modal Edita Equipamento-->
<div class="modal fade" id="modal_edita_equipamento" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabelEquipamento"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->

                <!-- Username Field -->
                <form role="form" method="post" action="<?= base_url('Equipamento/editar_equipamento') ?>" id="formulario_editar">
                    <div id="form_modal">
                        <div id="div-idEquipamento" class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="idEquipamento"><span class="text-danger" style="margin-right:5px;">*</span>Id:</label>
                                <div class="input-group">
                                    <input class="form-control" id="idEquipamento" type="text" name="idEquipamento" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>                    
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
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button" >Atualizar</button>                    
                        </div>                
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
<!-- fim modal edita equipamentos-->

<!-- Modal Exclui equipamentos -->
<div class="modal fade" id="modal_exclui_equipamento" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabelExcluiEquipamento"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->
                <form role="form" method="post" action="<?= base_url('Equipamento/excluir_equipamentos') ?>" id="formulario_excluir">
                    <div id="form_modal">
                        <div id="div-idExcluiEquipamento" class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="idEquipamentoExclui"><span class="text-danger" style="margin-right:5px;">*</span>Id:</label>
                                <div class="input-group">
                                    <input class="form-control" id="idEquipamentoExclui" type="text" name="idEquipamentoExclui" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p> Deseja realmente excluir este Equipamento? </p>
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
<!-- Fim modal exclui equipamentos -->

<!-- Modal Edita Fornecedor-->
<div class="modal fade" id="modal_edita_fornecedor" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabelFornecedor"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->

                <!-- Username Field -->
                <form role="form" method="post" action="<?= base_url('Fornecedor/editar_fornecedor') ?>" id="formulario_editar">
                    <div id="form_modal">
                        <div id="div-idFornecedor" class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="idFornecedor"><span class="text-danger" style="margin-right:5px;">*</span>Id:</label>
                                <div class="input-group">
                                    <input class="form-control" id="idFornecedor" type="text" name="idFornecedor" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>                    
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
                                <label for="cnpjFornecedor"><span class="text-danger" style="margin-right:5px;">*</span>Número do CNPJ:</label>
                                <div class="input-group">
                                    <input class="form-control" id="cnpjFornecedor" type="text" name="cnpjFornecedor" placeholder="Número do cnpj" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="telefoneFornecedor"><span class="text-danger" style="margin-right:5px;">*</span>Número do telefone do fornecedor:</label>
                                <div class="input-group">
                                    <input class="form-control" id="telefoneFornecedor" type="text" name="telefoneFornecedor" placeholder="Número do telefone do fornecedor" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="enderecoFornecedor"><span class="text-danger" style="margin-right:5px;">*</span>Endereço Fornecedor:</label>
                                <div class="input-group">
                                    <input class="form-control" id="enderecoFornecedor" type="text" name="enderecoFornecedor" placeholder="Endereço Fornecedor" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></label>
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
<!-- fim modal edita fornecedor-->

<!-- Modal Exclui fornecedor -->
<div class="modal fade" id="modal_exclui_fornecedor" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabelExcluiFornecedor"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->
                <form role="form" method="post" action="<?= base_url('Fornecedor/excluir_fornecedor') ?>" id="formulario_excluir">
                    <div id="form_modal">
                        <div id="div-idExcluiFornecedor" class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="idFornecedorExclui"><span class="text-danger" style="margin-right:5px;">*</span>Id:</label>
                                <div class="input-group">
                                    <input class="form-control" id="idFornecedorExclui" type="text" name="idFornecedorExclui" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p> Deseja realmente excluir este Fornecedor? </p>
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
<!-- Fim modal exclui fornecedor -->

<!-- Modal Edita Turma-->
<div class="modal fade" id="modal_edita_turma" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabelTurma"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->

                <!-- Username Field -->
                <form role="form" method="post" action="<?= base_url('Turma/editar_turma') ?>" id="formulario_editar">
                    <div id="form_modal">
                        <div id="div-idTurma" class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="idTurma"><span class="text-danger" style="margin-right:5px;">*</span>Id:</label>
                                <div class="input-group">
                                    <input class="form-control" id="idTurma" type="text" name="idTurma" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>                                            
                        <div class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="nomeTurma"><span class="text-danger" style="margin-right:5px;">*</span>Nome da Turma:</label>
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
                                    <input class="form-control" id="totalAlunosTurma" type="number" name="totalAlunosTurma" placeholder="Total de Alunos da turma" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></label>
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
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button" >Atualizar</button>                    
                        </div>                
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
<!-- Fim modal edita turma -->

<!-- Modal Exclui turma -->
<div class="modal fade" id="modal_exclui_Turma" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabelExcluiTurma"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->
                <form role="form" method="post" action="<?= base_url('Turma/excluir_turma') ?>" id="formulario_excluir">
                    <div id="form_modal">
                        <div id="div-idExcluiTurma" class="row">                          
                            <div class="form-group col-xs-12">
                                <label for="idExcluiTurma"><span class="text-danger" style="margin-right:5px;">*</span>Id:</label>
                                <div class="input-group">
                                    <input class="form-control" id="idExcluiTurma" type="text" name="idExcluiTurma" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p> Deseja realmente excluir esta Turma? </p>
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
<!-- Fim modal exclui turma -->
