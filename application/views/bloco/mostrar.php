<div class="row">
<br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-center" style="text-align:center;">
            <h2>Mostrar Bloco</h2>
        </div>
    
       
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('bloco');?>"> voltar</a>
        </div>
    </div>
</div>

<br>
<table class="table table-bordered">
<thead>
        <tr stle="background-color:yellow;">
            <th width="300px">Número</th>
            <th width="300px">Descrição</th>
           
        </tr>
</thead>

<tbody>
    
            <tr>
                <td>
                        <?php echo $bloco->id; ?>
                </td>
                <td>
                        <?php echo $bloco->descricao; ?>
                </td>
            </tr>
     
    </tbody>
</table>