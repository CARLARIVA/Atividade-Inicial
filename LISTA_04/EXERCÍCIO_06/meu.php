<?php

class Soma {
    function areaRetangulo($base, $altura) {

            $area = $base * $altura /2 ;
            return $area;
    }
    
}


$somaClass = new Soma();

echo $somaClass->areaRetangulo($_GET['valor1'], $_GET['valor2']);