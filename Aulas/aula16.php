<?php

class Dados{
	private $nome;
	private $fone;

	function __construct(){
		$this->nome = "nome";
		$this->fone = "999-9999";
	}
	
	function setNome($nome){
		$this->nome = $nome;
	}
	
	function getNome(){
		echo $this->nome;
	}
}






?>