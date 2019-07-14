<div class="row">
<br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cadastrar uma Nova Pessoa</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('pessoa'); ?>">Voltar</a>
        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url('pessoaCriar'); ?>">
    <?php
    if ($this->session->flashdata('errors')) {
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    ?>

    <div class="row" style="width: 400px;" >
           <select class="form-control selectpicker" data-style="btn btn-link" name="idCategoriaPessoa" >
               <option selected>Escolha uma Categoria de Pessoa...</option>
               <?php 
               $i=1;
               $query = $this->db->get('categoriaPessoa');
               foreach ($query->result() as $categoriaPessoa) { ?>   
               <option value="<?php echo $categoriaPessoa->id; ?>"><?php echo $categoriaPessoa->descricaoCategoria; ?></option><?php  
            } ?>
           </select>
    </div>  
        
    <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Informe o Nome da Pessoa:</strong>
                <input type="text" name="nome" class="form-control">
            </div>
        </div>

        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cpf:</strong>
                <input type="text" name="cpf" class="form-control">
            </div>
        </div>
        
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Campus:</strong>
                <input type="text" name="campus" class="form-control">
            </div>
        </div>

        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Número da Matrícula/SIAP:</strong>
                <input type="text" name="matricula" class="form-control">
            </div>
        </div>
        

        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>