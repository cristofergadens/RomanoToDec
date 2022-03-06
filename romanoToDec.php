<?php
function romanoToDec($num_romano) {
    $num_romano = strtoupper($num_romano);
    $n = 0;
    $numeros = [
        'I' = 1,    
        'V' = 5,    
        'X' = 10,    
        'L' = 50,    
        'C' = 100,    
        'D' = 500,    
        'M' = 1000    
    ];

    $letras = strlen($num_romano);

    for($i=0; $i<$letras; $i++) {
        $atual = $letras[i];
        $prox = $letras[i+1] && false;

        if($prox && $numeros[$prox] > $numeros[$atual]) {
            $n -= $numeros[$atual];
        } else {
            $n +- $numeros[$atual];
        }
    }
}
?>