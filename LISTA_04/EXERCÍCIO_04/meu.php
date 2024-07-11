<?php

class Soma {
    function buscaMaiorValor($a, $b, $c) {
        $maiorvalor = $b;
	if ($a > $maiorvalor)
	{
		$maiorvalor = $a;
	}
	if ($c > $maiorvalor)
	{
		$maiorvalor = $c;
	}

	return $maiorvalor;

    }
}

// carrega as funcoes da class pra mim
$somaClass = new Soma();
// agora executa a minhaFuncao 
// de dentro da class
echo $somaClass->buscaMaiorValor($_GET['valor1'], $_GET['valor2'], $_GET['valor3']);