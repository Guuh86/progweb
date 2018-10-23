<?php

#echo "Aula de POD - 01";

class Aluno {

	public $nome;
	public $idade;

	function __construct(){
		$this->nome = "Nome";
		$this->idade = 0;
    }

	function setNome($nome){
		$this->nome = $nome;
	}
    function getNome(){
		return $this->nome;
	}




	function setIdade($idade){
		$this->idade = $idade;
	}
   function getIdade($idade){
		return $this->idade;
	}