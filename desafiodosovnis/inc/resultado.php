<?php
require_once("validar.php");

class Resultado extends Validar{
 
	function ExibeResultado($cometa){
		$retorno = array();

		$grupo = array(
			'Amarelo',
			'Vermelho',
			'Preto',
			'Azul'
		);

		$dados = '';

		$validar = new Resultado();

		for($i=0; $i<count($grupo); $i++){
		
			$calculo_cometa = $validar->CalculaPalavra($cometa);
			$calculo_grupo = $validar->CalculaPalavra($grupo[$i]);

			if(!$validar->ValidaEnvioGrupo($calculo_cometa,$calculo_grupo)){
				$retorno[$i] =  $grupo[$i];
			}

		}

		foreach ($retorno as $chave => $valor) {
			$dados .= $valor.', ';
		}

		$dados = substr($dados, 0,strlen($dados) - 2);

		return $dados;

	}
}
?>