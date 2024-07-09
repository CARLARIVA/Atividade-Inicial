<?php

class Soma {
    
function swap ($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
        return "Valores apos a troca: A = ".$a.", B = ".$b;	
    }

    
}

// carrega as funcoes da class pra mim
$somaClass = new Soma();
// agora executa a minhaFuncao 
// de dentro da class
echo $somaClass->swap($_GET['valor1'], $_GET['valor2']);