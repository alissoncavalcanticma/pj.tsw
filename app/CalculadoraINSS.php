<?php

namespace App;

class CalculadoraINSS implements InterfaceCalculadoraINSS{
	
	private $sal;

	public function __construct($sal){
		
		$this->sal = $sal;
	}

	public static function calculaInssEmpregador($sl){
		$inssEmpregador = number_format($sl * 0.08, 2); 
		return $inssEmpregador;
	}

	public function calculaInssTrabalhador(){
		
		if($this->sal <= 1693.72){
				$inssTrabalhador = ($this->sal * 0.08);
				return $inssTrabalhador;
		}else if($this->sal >= 1693.73 && $this->sal <= 2822.90){
				$inssTrabalhador = ($this->sal * 0.09);
				return $inssTrabalhador;
		}else if($this->sal >= 2822.91 && $this->sal <= 5645.80){
				$inssTrabalhador = ($this->sal* 0.11);
				return $inssTrabalhador;
		}else{
				$inssTrabalhador = 621.04;
				return $inssTrabalhador;
		}
	}
}


?>