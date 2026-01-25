<?php

// Aula 2.9
require __DIR__ . "/src/funcoes.php";
// __DIR__ -> caminho absoluto

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2025;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = false;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

// Aula 1.3 - Retornando a mensagem
mensagemLancamento ($anoLancamento);

// Aula 1.4 - Retornando a o plano
$incluidoNoPlano = incluidoNoPlano ($planoPrime,$anoLancamento);
var_dump($incluidoNoPlano);

echo "O gênero do filme é: $genero\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];

//Aula 2.5 

var_dump( $filme['nome']);

$posicao = strpos ($filme['nome'], "Rag");
echo $posicao."\n";

echo substr(( $filme['nome']), 8);

//Aula 4.2
// $teste = criarFilme ( 
//     nome: "Michael",
//     nota: 8.8,
//     ano: 2035,
//     genero: "comedia" 
// );

$teste = criarFilme ( "Michael", 2035, 8.8, "comedia" );
print_r($teste);

?>

