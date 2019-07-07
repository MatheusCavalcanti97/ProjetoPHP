<div class="row">

<br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Listagem de Pessoa</h2>
        </div>

        
        <br>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('pessoa/criar') ?>">Cadastrar</a>
        </div>
    </div>
</div>

<br>
<table class="table table-bordered">

<thead>
        <tr>
            <th>Pessoa</th>
            <th width="100px">Excluir</th>
            <th width="120px">Mostrar Pessoa</th>
            <th width="100px">Editar Pessoa</th>
        </tr>
</thead>

    <tbody>
        <?php foreach ($data as $pessoa) { ?>      
            <tr>
                
                <td>
                    <?php echo $pessoa->nome; ?>
                    <?php echo $pessoa->cpf; ?>
                    <?php echo $pessoa->campus; ?>
                    <?php echo $pessoa->matricula; ?>

                    <form method="DELETE" action="<?php echo base_url('pessoa/excluir/' . $pessoa->id); ?>">
                </td>
                
                <td>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </td>

                <td>
                <a class="btn btn-info" href="<?php echo base_url('pessoa/' . $pessoa->id) ?>">Mostrar Pessoa</a>
                </td> 

                <td>
                <a class="btn btn-primary" href="<?php echo base_url('pessoa/editar/' . $pessoa->id) ?>">Editar Pessoa</a>
                </td></form>
                </td>     
            </tr>
        <?php } ?>
    </tbody>
</table>