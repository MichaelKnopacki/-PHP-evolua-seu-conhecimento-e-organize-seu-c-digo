<?php

// 1. Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

echo "Exercicio 1 \n\n";

$notas = [10,3,5,25,12,30];
sort($notas);
print_r($notas);
print_r(array_slice($notas, -3));

echo "\n ---------------------------";

// 2. Crie um programa em PHP que transforme a string `“Vinicius Dias,1997,Programador”` 
// em um array em que cada item está separado por vírgulas.

echo "Exercicio 2 \n\n";

$nome = 'Vinicius Dias, 1997, Programador';
echo $nome;

print_r(explode(",", $nome));


echo "\n ---------------------------";

// 3. Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne 
// ordenado em ordem alfabética.

echo "Exercicio 3 \n\n";

$nome = ["Michael","Carlos","Knopacki" ];
print_r ($nome);

function ordem($nome){
    sort($nome);
    return $nome;
}

print_r(ordem($nome));

echo "\n ---------------------------";
?>
