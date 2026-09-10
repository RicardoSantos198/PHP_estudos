<?php

function conversorGraus(float $graus): float {
    return ($graus * 9 / 5) + 32;
}

$entrada = readline ("Digite a quantidade de Graus Celcius: "); 

$celsius = floatval ($entrada);

$fahrenheit = conversorGraus($celsius);

echo "A temperatura em Fahrenheit é: " . $fahrenheit . "°F\n";
