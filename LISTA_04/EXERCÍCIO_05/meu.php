<?php

class Soma {
    function areaQuadrado($base, $altura) {

            $area = $base * $altura;
            return $area;
    }
    
}


$somaClass = new Soma();

echo $somaClass->areaQuadrado($_GET['valor1'], $_GET['valor2']);