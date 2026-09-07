<?php

echo "Bem-vindo(a) ao OpenMusic!\n";

$nomeAlbum = "Love Gun";
$anoLancamento =  1977;
$artistaBanda = "Kiss";
$preco = 175.00;

$quantidadedeNotas = $argc - 1;

$somaDeNotas = 0;

for ($contador = 1; $contador < $argc; $contador += 1) {
    $somaDeNotas += $argv [$contador];
}

$mediaAlbum = $somaDeNotas / $quantidadedeNotas ;


echo "Álbum: " . $nomeAlbum . "\n";
echo "Ano de lançamento: "  . $anoLancamento ."\n";
echo "Média das notas: " . $mediaAlbum . "\n";

if ($anoLancamento > 2022){
    echo "Este album é lançamento.\n";
}

elseif ($anoLancamento > 2000 && $anoLancamento <= 2022){
    echo"Este album não é tão antigo\n";

}

else {
    echo "Este album não é lançamento\n";
}

$genero = match ($nomeAlbum) {
    "Love Gun " => "Hard Rock",
    "Vol.4" => "Metal",
    "Nantucket Sleghride" => "Blues rock",
    default => "Gênero desconhecido...",
};

echo "O genêro do album é: " . $nomeAlbum . "\n" ;

echo $argc;