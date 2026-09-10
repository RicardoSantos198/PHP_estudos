<?php

function exibeMensagemLancamento(int $ano): void { //Aqui está informando o tipo dessa função, ou seja um número inteiro (int)
        // Condicional para verificar o lançamento do álbum
    if ($ano > 2022) {
        echo "Esse álbum é um lançamento.\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse álbum ainda é novo.\n";
    } else {
        echo "Esse álbum não é um lançamento.\n";
    }
}

function incluindoNoPlano(bool $planoPrime, int $anoLancamento ): bool {
    return $planoPrime || $anoLancamento < 2020;
}