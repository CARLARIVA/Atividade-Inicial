<?php

class Soma {
    function ehBissexto($ano) {
        
        if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
            return 1; // Ano bissexto
        } else {
            return 0; // Não é bissexto
        }
    
    
    }
    
}


$somaClass = new Soma();
if($somaClass->ehBissexto ($_GET['valor'])) {
    echo "é bissexto";
}

else{
  echo "não é bissexto";
}
