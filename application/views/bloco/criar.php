<div class="row">

<br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-top text-center">
            <h2>Cadastrar Novo Bloco</h2>
        </div>
    </div>
</div>

<div class="pull-right">
    <a class="btn btn-primary" href="<?php echo base_url('bloco'); ?>">Voltar</a>
</div>

<br>
<form method="post" action="<?php echo base_url('blocoCriar'); ?>">
    <?php
    if ($this->session->flashdata('errors')) {
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    ?>

    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição do Bloco:</strong>
                <input type="text" name="descricao" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>


    </div>
</form>