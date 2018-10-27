<?php

namespace App;

class Empregado implements InterfaceEmpregado{

	private $nome;
	private $salario;
	private $contribuicaoINSS;
	public $contribuicaoINSSEmpregador;
	private $salarioMIN;

	public function __construct($n, $s, $sMIN = 998.00){
		$this->nome = $n;
		if($s < $sMIN){
			$this->salario = $sMIN;	
		}else{
			$this->salario = $s;
		}
		$this->salarioMIN = $sMIN;
	}

	public function getNome(){
		return $this->nome;
	}
	public function getSalario(){
		return $this->salario;
	}
	public function getContribuicaoINSS(){
		self::calculaContribuicaoINSS();
		return $this->contribuicaoINSS;
	}
	public function getContribuicaoINSSEmpregador(){
		$this->contribuicaoINSSEmpregador = CalculadoraINSS::calculaInssEmpregador($this->salario);
		return $this->contribuicaoINSSEmpregador;
	}
	public function calculaContribuicaoINSS(){
		$aCalc = new CalculadoraINSS($this->salario);
		$aCalc->calculaInssTrabalhador();
		$this->contribuicaoINSS = $aCalc->calculaInssTrabalhador();
	}


}


?>