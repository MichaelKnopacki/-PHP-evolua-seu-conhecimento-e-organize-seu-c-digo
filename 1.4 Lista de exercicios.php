<?php

echo "Bem-vindo(a) ao screen match!\n";

// Aula 1.3 - Criada a funcao
function mensagemLancamento (int $anoLancamento){
    if ($anoLancamento > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif($anoLancamento > 2020 && $anoLancamento <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

// Aula 1.4 - Criada a funcao
function incluidoNoPlano (bool $planoPrime,int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

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
?>

