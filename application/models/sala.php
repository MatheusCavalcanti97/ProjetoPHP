<?php

class Aluno {

    protected $id;
    //VARCHAR(20)
    protected $quantCadeiras;
    //INTEIRO(3)
    protected $quantMonitores;
    //INTEIRO(3)
    protected $quantProjetor;
    //INTEIRO(3)
    protected $quantArCondicionado;
    //VARCHAR(10)
    protected $numSala;
    //VARCHAR(100)
    protected $observacoes;
    //FOREING KEY
    protected $idBloco;
    
    function __construct(
    $quantCadeiras = null, 
    $quantMonitores = null, 
    $quantProjetor = null,
    $quantArCondicionado = null, 
    $numSala = null, 
    $observacoes = null,
    $id = null,
    $idBloco = null) {
       
        $this->quantCadeiras = $quantCadeiras;
        $this->quantMonitores = $quantMonitores;
        $this->quantProjetor = $quantProjetor;
        $this->quantArCondicionado = $quantMonitores;
        $this->numSala = $numSala;
        $this->observacoes = $observacoes;
        $this->id = $id;
        $this->idBloco->idBloco;
    }
    
    function getId() {
        return $this->id;
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function getIdBloco() {
        return $this->idBloco;
    }
    
    function setIdBloco($idBloco) {
        $this->idBloco= $idBloco;
    }

    function getQuantCadeiras() {
        return $this->quantCadeiras;
    }
    
    function setQuantCadeiras($quantCadeiras) {
        $this->quantCadeiras= $quantCadeiras;
    }

    function getQuantMonitores() {
        return $this->quantMonitores;
    }
    
    function setQuantMonitores($quantMonitores) {
        $this->quantMonitores= $quantMonitores;
    }

    function getQuantProjetor() {
        return $this->quantProjetor;
    }
    
    function setQuantProjetor($quantProjetor) {
        $this->quantProjetor= $quantProjetor;
    }

    function getQuantArCondicionado() {
        return $this->quantArCondicionado;
    }
    
    function setQuantArCondicionado($quantArCondicionado) {
        $this->quantArCondicionado= $quantArCondicionado;
    }

    function getObservacoes() {
        return $this->observacoes;
    }
    
    function setObservacoes($observacoes) {
        $this->observacoes= $observacoes;
    }

    function getNumSala() {
        return $this->numSala;
    }
    
    function setNumSala($numSala) {
        $this->numSala= $numSala;
    }

}