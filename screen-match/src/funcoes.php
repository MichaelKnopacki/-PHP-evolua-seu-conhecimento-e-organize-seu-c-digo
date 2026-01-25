<?php

// Aula 2.9
// Criado o arquivo para segregar as funcoes


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

//Aula 4.2 - Definicao explicita dos dados
//1. Escreva uma função responsável por criar um filme com todos os valores necessários.
// function criarFilme ( string $nome, int $ano, float $nota, string $genero): array
function criarFilme ( $nome, $ano, $nota, $genero)
{
    return
    [
    "nome" => $nome,
    "ano" => $ano,
    "nota" => $nota,
    "genero" => $genero
    ];
}

//---------------------------------------------------------------------------------------------

function criarFilme2 ( string $nome, int $ano, float $nota, string $genero): array
{
    return
    [
    "nome" => $nome,
    "ano" => $ano,
    "nota" => $nota,
    "genero" => $genero
    ];
}

?>