<div class="row">

    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-center">
            <h2 style="text-align:center;">Edite a Descrição da Categoria de Pessoa</h2>
        </div>

        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('categoriaPessoa');?>">Voltar</a>
        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url('categoriaPessoa/atualizar/'.$categoriaPessoa->id);?>">

    <?php
    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    ?>
    
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        
            <div class="form-group">
            <strong>Descrição Categoria de Pessoa:</strong>
                <input type="text" name="descricaoCategoria" class="form-control" value="<?php echo $categoriaPessoa->descricaoCategoria; ?>">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</form>