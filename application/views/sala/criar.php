<div class="row">
<br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cadastrar uma Nova Sala</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('sala'); ?>">Voltar</a>
        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url('salaCriar'); ?>">
    <?php
    if ($this->session->flashdata('errors')) {
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    ?>

    <div class="row" style="width: 400px;" >
           <select class="form-control selectpicker" data-style="btn btn-link" name="idBloco" >
               <option selected>Escolha uma bloco...</option>
               <?php 
               $i=1;
               $query = $this->db->get('bloco');
               foreach ($query->result() as $bloco) { ?>   
               <option value="<?php echo $bloco->id; ?>"><?php echo $bloco->descricao; ?></option><?php  
            } ?>
           </select>
    </div>  
        
    <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantidade de Cadeiras:</strong>
                <input type="number" name="quantCadeiras" class="form-control">
            </div>
        </div>

        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantidade de Monitores:</strong>
                <input type="number" name="quantMonitores" class="form-control">
            </div>
        </div>
        
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantidade de Projetores:</strong>
                <input type="number" name="quantProjetor" class="form-control">
            </div>
        </div>

        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantidade de Ar Condicionado (os):</strong>
                <input type="number" name="quantArCondicionado" class="form-control">
            </div>
        </div>
        
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Número da Sala:</strong>
                <input type="text" name="numSala" class="form-control">
            </div>
        </div>

        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Observações:</strong>
                <input type="text" name="observacoes" class="form-control">
            </div>
        </div>

        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>