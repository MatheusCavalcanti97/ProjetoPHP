<div class="row">
    <div class="col-lg-12 margin-tb" >
    <br><br>
        <div class="pull-left" >
            <h2 >Edite uma Sala</h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('sala');?>">Voltar</a>
        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url('sala/atualizar/'.$sala->id);?>">
    <?php
    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    ?>

    <div class="row">


    <div class="centered" style="width: 400px; ce text-align: center;">
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
    <br>
    <br>
  
        <div>
            <div class="form-group">
                <strong>Quantidade de Cadeiras: </strong>
                <input type="number" name="quantCadeiras" class="form-control" value="<?php echo $sala->quantCadeiras; ?>">
            </div>
        </div>

        <div>
            <div class="form-group">
                <strong>Quantidade de Monitores:</strong>
                <input type="number" name="quantMonitores" class="form-control" value="<?php echo $sala->quantMonitores; ?>">
            </div>
        </div>

       
        <div>
            <div class="form-group">
                <strong>Quantidade de Projetores:</strong>
                <input type="number" name="quantProjetor" class="form-control" value="<?php echo $sala->quantProjetor; ?>">
        </div>
        

        <div>
            <div class="form-group">
                <strong><br>Quantidade de Ar Condicionados:</strong>
                <input type="number" name="quantArCondicionado" class="form-control" value="<?php echo $sala->quantArCondicionado; ?>">
            </div>
        </div>        

        <div>
            <div class="form-group">
                <strong><br>Numero da Sala:</strong>
                <input type="text" name="numSala" class="form-control" value="<?php echo $sala->numSala; ?>">
            </div>
        </div>

        <div>
            <div class="form-group">
                <strong><br>Observações:<br></strong>
                <input type="text" name="observacoes" class="form-control" value="<?php echo $sala->observacoes; ?>">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <br><br>
        </div>

        <br>
    </div>
</form>