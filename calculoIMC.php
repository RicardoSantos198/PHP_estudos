<?php

function calculaImc(float $alturaEmMetros, float $pesoEmQuilos): float
{
    return $pesoEmQuilos / $alturaEmMetros ** 2;
}

function classificaImc(float $imc): string
{
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc < 25.0) {
        return "Peso normal";
    } elseif ($imc < 30.0) {
        return "Sobrepeso";
    } elseif ($imc < 35.0) {
        return "Obesidade grau I";
    } elseif ($imc < 40.0) {
        return "Obesidade grau II";
    } else {
        return "Obesidade grau III (mórbida)";
    }
}

echo "=== Calculadora de IMC ===\n\n";

// Solicita o peso ao usuário
echo "Digite o seu peso em kg (ex: 70.5): ";
$peso = (float) str_replace(',', '.', trim(fgets(STDIN)));

// Solicita a altura ao usuário
echo "Digite a sua altura em metros (ex: 1.75): ";
$altura = (float) str_replace(',', '.', trim(fgets(STDIN)));

// Validação simples dos dados informados
if ($peso <= 0 || $altura <= 0) {
    echo "\nErro: Peso e altura devem ser valores válidos e maiores que zero.\n";
    exit(1);
}

// Realiza o cálculo e obtém a classificação
$imc = calculaImc($altura, $peso);
$classificacao = classificaImc($imc);

// Exibição dos resultados formatados
echo "\n--- Resultado ---\n";
echo "IMC calculado: " . number_format($imc, 2, ',', '.') . "\n";
echo "Classificação: " . $classificacao . "\n";