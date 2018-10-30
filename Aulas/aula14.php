<?php
session_start();

class livro{

    private $nome;
    public $autor;
    public $ano;

    function __construct(){
    	$nome = "sem nome";
    	$autor = "sem autor";
    	$ano = 2010;
    }

    function setNome($nome){
    	$this->nome = $nome;
    }

    function getNome(){
    	return $this->nome;
    }

    function setAutor($autor){
    	$this->autor = $autor;
    }

    function getAutor(){
    	return $this->autor;
    }

    function setAno($ano){
    	$this->ano = $ano;
    }

    function getAno(){
    	return $this->ano;
    }






}



?>