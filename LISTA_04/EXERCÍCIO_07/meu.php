<?php

class Soma {
    function areaCirculo($raio) {

        $pi = 3.14159;
        return $pi * $raio * $raio;
    
    }
    
}


$somaClass = new Soma();

echo $somaClass->areaCirculo((float)$_GET['valor']);