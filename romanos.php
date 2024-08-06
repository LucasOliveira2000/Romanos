<?php

function converteRealParaRomano($numero)
{
    $numerosRomanos = [
        1000 => "M",
        900 => "CM",
        500 => "D",
        400 => "CD",
        100 => "C",
        90 => "XC",
        50 => "L",
        40 => "XL",
        10 => "X",
        9 => "IX",
        5 => "V",
        4 => "IV",
        1 => "I"
    ];

    $resultado = '';
    
    foreach ($numerosRomanos as $valor => $romano) {
        while ($numero >= $valor) {
            $resultado .= $romano; 
            $numero -= $valor;
        }
    }

    return $resultado;
}

echo converteRealParaRomano(80);  
echo "\n";
echo converteRealParaRomano(58);  
?>

