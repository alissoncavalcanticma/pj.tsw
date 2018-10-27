<?php

use \PHPUnit\Framework\TestCase;
use \App\Empregado;

class EmpregadoTest extends TestCase{

	//Verifica a existência dos atributos da classe Empregado
	public function testVerificarAtributos(){
		$this->assertClassHasAttribute('nome', Empregado::class);
		$this->assertClassHasAttribute('salario', Empregado::class);
		$this->assertClassHasAttribute('contribuicaoINSS', Empregado::class);
		$this->assertClassHasAttribute('contribuicaoINSSEmpregador', Empregado::class);
		$this->assertClassHasAttribute('salarioMIN', Empregado::class);
	}

	//Verifica a existência dos métodos da classe Empregado
	public function testVerificarExistenciaDosMetodos(){
		$this->assertTrue
			(method_exists(Empregado::class, '__construct'), "Método não existe!!!");
		$this->assertTrue
			(method_exists(Empregado::class, 'getNome'), "Método não existe!!!");
		$this->assertTrue
			(method_exists(Empregado::class, 'getSalario'), "Método não existe!!!");
		$this->assertTrue
			(method_exists(Empregado::class, 'getContribuicaoINSS'), "Método não existe!!!");
		$this->assertTrue
			(method_exists(Empregado::class, 'getContribuicaoINSSEmpregador'), "Método não existe!!!");
		$this->assertTrue
			(method_exists(Empregado::class, 'calculaContribuicaoINSS'), "Método não existe!!!");
	}

	//Verifica os retornos das funções da classe Empregado instanciados pelo objeto $emp
	public function testReturns(){

		//Objeto $emp, instância de Empregado
		$emp = new Empregado("Alisson C.", 1971.00);
		//Verifica retorno do método getNome() da instância $emp
		$this->assertEquals("Alisson C.", $emp->getNome(), "Retorno não Esperado!!!");
		//Verifica retorno do método getSalario() da instância $emp
		$this->assertEquals(1971.00, $emp->getSalario(), "Retorno não Esperado!!!");
		//Verifica retorno do método getContribuicaoINSS() da instância $emp
		$this->assertEquals(177.39, $emp->getContribuicaoINSS(), "Retorno não Esperado!!!");
		//Verifica retorno do método getContribuicaoINSSEmpregador() da instância $emp
		$this->assertEquals(157.68, $emp->getContribuicaoINSSEmpregador(), "Retorno não Esperado!!!");
	}
}

?>