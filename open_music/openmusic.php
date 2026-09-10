<?php

require __DIR__ . "/funcoes.php"; //O DIR adiciona uma caminho absoluto, ou seja, informando a pasta onde está o arquivo atual.

echo "Bem-vindo(a) ao OpenMusic!\n\n";

$nome_album = "Love Gun";
$anoLancamento = 1977;
$planoPrime = true;

// Coleta de notas passadas pela linha de comando
$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

// Evita erro de divisão por zero caso nenhuma nota seja passada no terminal
if ($quantidadeDeNotas > 0) {
    $nota_album = array_sum($notas) / $quantidadeDeNotas;
} else {
    $nota_album = 0; // Valor padrão se não houver notas
}


$incluidoNoPlano = incluindoNoPlano($planoPrime, $anoLancamento);


echo "Nome do álbum: " . $nome_album . "\n";
if ($quantidadeDeNotas > 0) {
    echo "Nota do álbum: " . round($nota_album, 1) . "\n";
} else {
    echo "Nota do álbum: Nenhuma nota informada via argumentos.\n";
}
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

// Exibição do status do plano
if ($incluidoNoPlano) {
    echo "Disponível no plano: Sim\n";
} else {
    echo "Disponível no plano: Não\n";
}

// Gênero musical com match expression
$genero = match ($nome_album) {
    "Love Gun" => "Hard Rock",
    "Vol.4" => "Metal",
    "Electric Ladyland" => "Psicodélico",
    default => "Gênero desconhecido",
};

echo "O gênero do álbum é: $genero\n\n";

// Dados do álbum organizados em um array associativo
$album = [
    "nome" => $nome_album,
    "ano" => $anoLancamento,
    "nota" => $nota_album,
    "genero" => $genero,
];

echo "Ano recuperado do array: " . $album["ano"] . "\n";

var_dump ($notas); 
sort ($notas);
var_dump ($notas); 

var_dump ($album ["nome"]);
$posicaoLetraN = strpos ($album["nome"], "n");
var_dump ($posicaoLetraN);

var_dump (substr($album["nome"] , 0, $posicaoLetraN));