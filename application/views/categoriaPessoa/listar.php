<div class="row">
    
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-center" style="text-align:center;">
            <h2>Listagem das Categorias de Pessoa</h2>
        </div>

     
        <div class="pull-right" >
            <a class="btn btn-success" href="<?php echo base_url('categoriaPessoa/criar') ?>">Cadastrar</a>
        </div>
    </div>
</div>

<br>
<table class="table table-bordered">

<thead >
        <tr>
            <th>Categoria de Pessoa</th>
            <th width="100px">Excluir</th>
            <th width="100px">Mostrar Categoria de Pessoa</th>
            <th width="100px">Editar Categoria de Pessoa</th>
        </tr>  
</thead>



    <tbody>
        <?php foreach ($data as $categoriaPessoa) { ?>      
            <tr>
             
                <td>
                <?php echo $categoriaPessoa->descricaoCategoria; ?>
                    <form method="DELETE" action="<?php echo base_url('categoriaPessoa/excluir/' . $categoriaPessoa->id); ?>">
                </td> 

                <td>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </td>

                <td>
                <a class="btn btn-info" href="<?php echo base_url('categoriaPessoa/' . $categoriaPessoa->id) ?>">Mostrar Categoria de Pessoa</a>
                </td> 

                <td>
                <a class="btn btn-primary" href="<?php echo base_url('categoriaPessoa/editar/' . $categoriaPessoa->id) ?>"> Editar Categoria de Pessoa </a>
                </td>
            </td>
                </form>
            </tr>
        <?php } ?>
    </tbody>
</table>