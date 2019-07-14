<html>

    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/styleCss.css">
    </head>

<body>
    <div class="row">
        
        <br>
        <div class="col-lg-12 margin-tb">
            <div class="pull-center" style="text-align:center;">
                <h2>Listagem de Blocos</h2>
            </div>

        
            <div class="pull-right" >
                <a class="btn btn-success" href="<?php echo base_url('bloco/criar') ?>">Cadastrar</a>
            </div>
        </div>
    </div>

    <br>
    <table class="table table-bordered">

    <thead >
            <tr>
                <th>Bloco</th>
                <th width="200px">Excluir</th>
                <th width="200px">Mostrar Bloco</th>
                <th width="200px">Editar Bloco</th>
            </tr>  
    </thead>



        <tbody>
            <?php foreach ($data as $bloco) { ?>      
                <tr>
                
                    <td>
                    <?php echo $bloco->descricao; ?>
                        <form method="DELETE" action="<?php echo base_url('bloco/excluir/' . $bloco->id); ?>">
                    </td> 

                    <td>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </td>

                    <td>
                    <a class="btn btn-info" href="<?php echo base_url('bloco/' . $bloco->id) ?>">Mostrar Bloco</a>
                    </td> 

                    <td>
                    <a class="btn btn-primary" href="<?php echo base_url('bloco/editar/' . $bloco->id) ?>"> Editar Bloco </a>
                    </td>
                </td>
                    </form>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>