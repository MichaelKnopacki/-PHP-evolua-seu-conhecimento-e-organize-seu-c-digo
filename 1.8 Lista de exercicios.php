<?php

// 1. Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

/* $n1 = 10;
$n2 = 5;
$operacao = "-";

function teste ($n1,$n2,$operacao){

    switch ($operacao) {
        case "+":
            return $n1 + $n2; 
        case "-":
            return $n1 - $n2;
        case "*":
            return $n1 * $n2; 
        case "/":
            return $n1 / $n2; 
        default:
            return "Operacao inexistente";
    }
    
}

echo teste($n1,$n2,$operacao)."\n";*/

// 2. Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.

 $peso = 120;
 $altura = 1.80;

 function calculaImc ($peso, $altura){

    $imc = $peso / ($altura * $altura);

    if ( $imc < 18.5 ){
        return "abaixo do peso";
    } else if ( $imc >= 18.5 && $imc <= 24.9) {
        return "Peso normal";
    } else if ( $imc >= 25 && $imc <= 29.9) {
        return "Sobrepeso";
    } else if ( $imc >= 30 && $imc <= 34.9) {
        return "Obesidade grau 1";
    } else if ( $imc >= 35 && $imc <= 39.9) {
        return "Obesidade grau 2";
    } else if ( $imc >= 40 ) {
        return "Obesidade grau 3";
    }

}

echo calculaImc ($peso, $altura)."\n";

// 3. Crie uma função em PHP que converta graus celsius para Fahrenheit.


// Desafio extra - chatGPT

/*$n1 = 10;

function parOuImpar ($n1){

    if ( $n1 % 2){
        return "impar";
    } else {
        return "par";
    }
}

echo parOuImpar($n1)."\n";*/

?>