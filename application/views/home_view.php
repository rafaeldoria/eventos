
<h2>ADMIN DASHBOARD</h2>   
</div>
</div>  
<?php
$table = array(
    array('Nome', 'Cor', 'Tamanho'),
    array('Fred', 'Azul', 'Pequeno'),
    array('Mary', 'Vermelho', 'Grande'),
    array('John', 'Verde', 'Médio')
);
echo $this->table->generate($table);
?>

<div class="col-lg-3 ">
    <div class="alert alert-info">
        <strong>Welcome <?= $usuario ?> </strong>
    </div>
</div>
<td class="actions">

    <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
    <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
    <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
</td>


