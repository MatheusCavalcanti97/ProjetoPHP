<?php

class Pessoa {

    protected $id;
    protected $nome;
    protected $cpf;
    protected $campus;
    protected $matricula;
    protected $idCategoriaPessoa;

    function __construct($nome = null, $cpf = null,$matricula = null, $campus = null,$idCategoriaPessoa = null,  $id = null ){
       $this->id = $id;
       $this->nome = $nome;
       $this->cpf = $cpf;
       $this->matricula = $matricula; 
       $this->campus = $campus;
       $this->idCategoriaPessoa = $idCategoriaPessoa;

    }

    function getId(){
        return $this->id;
    }

    function setId($id){
        return $this->id = $id;
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        return $this->nome = $nome;
    }

    function getCpf(){
        return $this->cpf;
    }

    function setCpf($cpf){
        return $this->cpf = $cpf;
    }

    function getCampus(){
        return $this->campus;
    }

    function setCampus($campus){
        return $this->campus = $campus;
    }

    function getMatricula(){
        return $this->matricula;
    }

    function setMatricula($matricula){
        return $this->matricula = $matricula;
    }

    function getIdCategoriaPessoa(){
        return $this->idCategoriaPessoa;
    }

    function setIdCategoriaPessoa($idCategoriaPessoa){
        return $this->idCategoriaPessoa = $idCategoriaPessoa;
    }

}