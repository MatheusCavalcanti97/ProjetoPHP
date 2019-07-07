<?php

class CategoriaPessoa {

    protected $id;
    protected $descricaoCategoria;

    function __contruct($descricaoCategoria = null, $id = null){
        $this->id = $id;
        $this->descricaoCategoria = $descricaoCategoria;
    }

    function getId() {
        return $this->id;
    }
    
    function setId($id) {
        $this->id = $id;
    }


    function getDescricaoCategoria(){
        return $this->descricaoCategoria;
    }

    function setDescricaoCategoria($descricaoCategoria) {
        $this->descricaoCategoria = $descricaoCategoria;
    }


}