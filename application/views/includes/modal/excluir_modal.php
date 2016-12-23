<!-- Modal Exclui -->
<div class="modal fade" id="modal_exclui" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir usuário</h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->

                <?php
                echo form_open("Usuario/excluir_usuario");
                ?>
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
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Sim</button>
                        <button class="btn btn-default" data-dismiss="modal">N&atilde;o</button>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
