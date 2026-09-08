<?php

// Saldo inicial da conta
$saldo = 1000.00;

// Loop principal do caixa eletrônico (executa até que a opção 4 - Sair seja escolhida)
do {
    // Exibição do menu de opções
    echo "\n==============================\n";
    echo "       CAIXA ELETRÔNICO       \n";
    echo "==============================\n";
    echo "1. Consultar saldo\n";
    echo "2. Sacar\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "Escolha uma opção: ";

    // Leitura da opção digitada pelo usuário no terminal
    $opcao = trim(fgets(STDIN));

    // Avaliação da opção escolhida
    switch ($opcao) {
        case '1':
            // Opção 1: Consultar saldo
            echo "\n-> Seu saldo atual é: R$ " . number_format($saldo, 2, ',', '.') . "\n";
            break;

        case '2':
            // Opção 2: Realizar saque
            echo "\nDigite o valor para saque: R$ ";
            $valorSaque = (float) trim(fgets(STDIN));

            // Validação: valor precisa ser maior que zero
            if ($valorSaque <= 0) {
                echo "Valor inválido! Digite um valor maior que zero.\n";
            } elseif ($valorSaque > $saldo) {
                // Validação: verifica se há saldo suficiente
                echo "Saldo insuficiente! Seu saldo é de apenas R$ " . number_format($saldo, 2, ',', '.') . "\n";
            } else {
                // Realiza a subtração do saldo
                $saldo -= $valorSaque;
                echo "Saque de R$ " . number_format($valorSaque, 2, ',', '.') . " realizado com sucesso!\n";
                echo "Novo saldo: R$ " . number_format($saldo, 2, ',', '.') . "\n";
            }
            break;

        case '3':
            // Opção 3: Depositar valor
            echo "\nDigite o valor para depósito: R$ ";
            $valorDeposito = (float) trim(fgets(STDIN));

            // Validação: valor do depósito deve ser maior que zero
            if ($valorDeposito <= 0) {
                echo "Valor inválido! O valor deve ser maior que zero.\n";
            } else {
                // Adiciona o valor ao saldo atual
                $saldo += $valorDeposito;
                echo "Depósito de R$ " . number_format($valorDeposito, 2, ',', '.') . " realizado com sucesso!\n";
                echo "Novo saldo: R$ " . number_format($saldo, 2, ',', '.') . "\n";
            }
            break;

        case '4':
            // Opção 4: Finalizar o programa
            echo "\nObrigado por utilizar nosso caixa eletrônico. Até logo!\n";
            break;

        default:
            // Mensagem para opções fora de 1 a 4
            echo "\nOpção inválida! Por favor, escolha uma opção válida (1 a 4).\n";
            break;
    }
//Enquanto a opção não for 4, as opções vão continuar aparecendo.
} while ($opcao !== '4');

