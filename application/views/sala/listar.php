<div class="row">

<br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Listagem de Salas</h2>
        </div>

        
        <br>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('sala/criar') ?>">Cadastrar</a>
        </div>
    </div>
</div>

<br>
<table class="table table-bordered">

<thead>
        <tr>
            <th>Sala</th>
            <th width="100px">Excluir</th>
            <th width="120px">Mostrar Sala</th>
            <th width="100px">Editar Sala</th>
        </tr>
</thead>

    <tbody>
        <?php foreach ($data as $sala) { ?>      
            <tr>
                
                <td>
                    <?php echo $sala->quantProjetor; ?>
                    <?php echo $sala->quantMonitores; ?>

                    <form method="DELETE" action="<?php echo base_url('sala/excluir/' . $sala->id); ?>">
                </td>
                
                <td>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </td>

                <td>
                <a class="btn btn-info" href="<?php echo base_url('sala/' . $sala->id) ?>">Mostrar Sala</a>
                </td> 

                <td>
                <a class="btn btn-primary" href="<?php echo base_url('sala/editar/' . $sala->id) ?>">Editar Sala</a>
                </td></form>
                </td>     
            </tr>
        <?php } ?>
    </tbody>
</table>