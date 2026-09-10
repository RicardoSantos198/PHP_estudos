<?php

/**
 * Ordena um array de strings em ordem alfabética.
 *
 * @param array $array O array de strings a ser ordenado.
 * @return array O array ordenado.
 */
function ordenarArrayAlfabetico(array $array): array {
    // sort() ordena o array diretamente. O modificador SORT_STRING garante
    // que a comparação seja feita considerando os elementos como texto.
    sort($array, SORT_STRING);
    
    return $array;
}

// --- Exemplo de uso ---

$frutas = ["Melancia", "Abacaxi", "Uva", "Banana", "Laranja"];

$frutasOrdenadas = ordenarArrayAlfabetico($frutas);

print_r($frutasOrdenadas);
