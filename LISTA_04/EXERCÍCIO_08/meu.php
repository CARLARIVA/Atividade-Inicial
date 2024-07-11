<?php

class Soma {
    function converteFahrenheitParaCelsius($Fahrenheit) {

        $celsius =  ($Fahrenheit - 32) * 5 / 9;
        return $celsius;
    
    
    }
    
}


$somaClass = new Soma();

echo $somaClass->converteFahrenheitParaCelsius((float)$_GET['valor']);