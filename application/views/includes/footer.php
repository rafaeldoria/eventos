<div class="footer">


    <div class="row">
        <div class="col-lg-12" >
            &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
        </div>
    </div>
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
<script src="<?= base_url('assets/js/usuarios.js') ?>"></script>


</body>
</html>


<!-- Modal Edita-->
<div class="modal fade" id="modal_edita" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <!-- Login Form -->
                <?php
                echo form_open("Usuario/editar_usuario");
                ?>
                <!-- Username Field -->
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
            </div>
        </div>
    </div>    
</div>
<!-- fim modal edita -->


<!-- Modal Edita-->
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
                        <?= anchor('Usuario/excluir_usuario', 'Sim', array("class" => "btn btn-primary")); ?></li>  
                        <button class="btn btn-default" data-dismiss="modal">N&atilde;o</button>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






