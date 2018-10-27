<?php

use \PHPUnit\Framework\TestCase;
use \App\Empregado;

class EmpregadoTest extends TestCase{

	//Verifica a existência dos atributos da classe Empregado
	public function verificarAtributos(){
		$this->assertClassHasAttribute('nome', Empregado::class);
	}

	//Verifica a existência dos métodos da classe Empregado
	public function verificarExistenciaDosMetodos(){
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
}

?>