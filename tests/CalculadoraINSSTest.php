<?php

use \PHPUnit\Framework\TestCase;
use \App\CalculadoraINSS;

class CalculadoraINSSTest extends TestCase{

	//Função para verificar a existência e conformidade dos atributos da classe CalculadoraINSS
	public function testAtributos(){
		$this->assertClassHasAttribute('sal', CalculadoraINSS::class);
	}

	//Função para verificar a existência das funções que estão declaradas na interface InterfaceCalculadoraINSS
	public function testMetodos(){
		
		$this->assertTrue(method_exists(CalculadoraINSS::class, '__construct'), "Método não existe!");
		$this->assertTrue(method_exists(CalculadoraINSS::class, 'calculaInssEmpregador'), "Método não existe!");
		$this->assertTrue(method_exists(CalculadoraINSS::class, 'calculaInssTrabalhador'), "Método não existe!");
	}
	
	//Função para verificar o retorno das funções da class CalculadoraINSS
	public function testReturns(){
		
		//Testando valor menor ou igual a 1693.72
		$aCalc = new CalculadoraINSS(1210.50);
		$this->assertEquals
			(96.84, $aCalc->calculaInssTrabalhador(), "Retorno não esperado!!!");

		//Testando valor acima de 1693.72 e abaixo ou igual a 2822.90
		$aCalc = new CalculadoraINSS(1850.20);
		$this->assertEquals
			(166.518, $aCalc->calculaInssTrabalhador(), "Retorno não esperado!!!");

		//Testando valor maior que 2822.90 e menor ou igual a 5645.80
		$aCalc = new CalculadoraINSS(3720);
		$this->assertEquals(409.20, $aCalc->calculaInssTrabalhador(), "Retorno não esperado!!!");

		//Testando valor maior que 5645.80
		$aCalc = new CalculadoraINSS(7342.03);
		$this->assertEquals(621.04, $aCalc->calculaInssTrabalhador(), "Retorno não esperado!!!");
	}
}


?>