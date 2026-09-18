<?php

$caminhoArquivo = __DIR__ . '/album.json';
$conteudoAquivoAlbum = file_get_contents($caminhoArquivo);
$album = json_decode($conteudoAquivoAlbum, true);

var_dump($album);