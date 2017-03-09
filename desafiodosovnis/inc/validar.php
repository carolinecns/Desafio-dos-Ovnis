<?php
class Validar
{
	public function CalculaPalavra($palavra){
	  	$letra = array(
			'a' => 1,
			'b' => 2,
			'c' => 3,
			'd' => 4,
			'e' => 5,
			'f' => 6,
			'g' => 7,
			'h' => 8,
			'i' => 9,
			'j' => 10,
			'k' => 11,
			'l' => 12,
			'm' => 13,
			'n' => 14,
			'o' => 15,
			'p' => 16,
			'q' => 17,
			'r' => 18,
			's' => 19,
			't' => 20,
			'u' => 21,
			'v' => 22,
			'w' => 23,
			'x' => 24,
			'y' => 25,
			'z' => 26
		);

		$total = empty($total)? 1 : $total;

		for($c = 0; $c < strlen($palavra); $c++){
			$letra_palavra = strtolower(substr($palavra, $c, 1));
			
			$valor_letra = $letra[$letra_palavra];
			$total = $total * $valor_letra;

		}

		$resto = $total % 45;

		return $resto;
	}

	public function ValidaEnvioGrupo($calculo_cometa, $calculo_grupo){
		if($calculo_cometa == $calculo_grupo){
			return true;
		}
		else{
			return false;
		}
	}

}
?>