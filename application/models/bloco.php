<?php

class Bloco {

    protected $id;
    protected $descricao;

    function __construct($descricao = null,$sala = null,$id = null){
        $this->id = $id;
        $this->descricao = $descricao;       
    }

    function getId() {
        return $this->id;
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function getDescricao() {
        return $this->descricao;
    }
    
    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}

