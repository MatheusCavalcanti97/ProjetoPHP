<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Mostrar todas as Pessoas</h2>
        </div>

        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('pessoa');?>">Voltar</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        
        <div class="form-group">
            <strong>Nome:</strong>
            <?php echo $pessoa->nome; ?>
        </div>

        <div class="form-group">
            <strong>Cpf:</strong>
            <?php echo $pessoa->cpf; ?>
        </div>

        <div class="form-group">
            <strong>Campus:</strong>
            <?php echo $pessoa->campus; ?>
        </div>

        <div class="form-group">
            <strong>Matrícula:</strong>
            <?php echo $pessoa->matricula; ?>
        </div>

    </div>
    
    </div>
</div>