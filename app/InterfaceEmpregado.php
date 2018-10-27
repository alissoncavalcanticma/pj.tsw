<?php

namespace App;

interface InterfaceEmpregado{

	public function getNome();
	public function getSalario();
	public function getContribuicaoINSS();
	public function getContribuicaoINSSEmpregador();
	public function calculaContribuicaoINSS();
}


?>