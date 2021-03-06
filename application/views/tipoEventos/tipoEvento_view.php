<div id="top" class="row">
    <div class="col-sm-3">
        <div class="alert alert-info">
            <strong>Welcome <?= $usuario ?> </strong>
        </div>
    </div>
    <div class="col-sm-6">

        <div class="input-group h2">
            <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>

    </div>
    <div class="col-sm-3">
        <?= anchor('TiposEventos/cadastro_tipoEvento', 'Adicionar', 'class="btn btn-primary pull-right h2"') ?>        
    </div>
</div> <!-- /#top -->
<!-- titulo colunas -->

<div id="list" class="row">

    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Tipo de Evento</th>
                    <th>Observação</th> 
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <tbody id="tabelaTiposEventos">                
            </tbody>

        </table>
    </div>

</div> <!-- /#list -->

<div id="bottom" class="row">
    <div class="col-md-12">
        <ul class="pagination">
            <li class="disabled"><a>&lt; Anterior</a></li>
            <li class="disabled"><a>1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
        </ul><!-- /.pagination -->
    </div>
</div> <!-- /#bottom -->
</div> <!-- /#main -->
