<?php 

require_once('simpletest/autorun.php');
require_once('../inc/validar.php');
require_once('../inc/resultado.php');

class TestResultadoEnvio extends UnitTestCase{

	function testCalculaPalavra(){
		$validar = new Validar();

		$validar->CalculaPalavra('Halley');
	}

	function testValidaEnvioGrupo(){
		$validar = new Validar();

		$validar->ValidaEnvioGrupo(30,0);
	}

	function testExibeResultado(){
		$resultado = new Resultado();

		$resultado->ExibeResultado('Halley');
	}
}
?>