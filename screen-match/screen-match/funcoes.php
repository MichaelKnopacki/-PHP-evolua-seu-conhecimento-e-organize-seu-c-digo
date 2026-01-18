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

?>