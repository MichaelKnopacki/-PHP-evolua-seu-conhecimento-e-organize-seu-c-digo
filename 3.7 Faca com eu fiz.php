<?php

echo ('---> 1. Transforme o array associativo `$filme` em um JSON e escreva o resultado em um arquivo\n');

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];

print_r($filme);

$filmeJson = json_encode($filme);
echo ($filmeJson);
file_put_contents("Filmes.txt", $filmeJson);

// Dica pos correcao
$filmeJson2 = json_encode($filme, JSON_PRETTY_PRINT);
echo ($filmeJson2);
file_put_contents("Filmes.txt", $filmeJson);

echo ("\n\n---> 2. Em outro arquivo PHP, leia o conteúdo em JSON e transforme-o em um array associativo no PHP\n\n");

$conteudo = file_get_contents(__DIR__ . "/Filmes.txt");
echo ($conteudo . "\n\n");
$filmeNovo = json_decode($conteudo,true);
print_r($filmeNovo);

?>