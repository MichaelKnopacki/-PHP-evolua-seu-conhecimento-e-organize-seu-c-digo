<?php

echo  ("1. Escreva um programa em PHP que abra um arquivo chamado `teste.txt` para ler a primeira linha e depois o fecha.\n\n");

$primeira = fopen("teste.txt", "r");
echo fgets($primeira);
fclose($primeira);
echo("\n");

echo ("2. Escreva um programa em PHP que abra o arquivo `teste.txt`, acrescente a frase 'PHP é incrível!' no final do arquivo e depois o feche.\n\n");

$primeira = fopen("teste.txt", "a");
echo fwrite($primeira, "PHP é incrível!");
fclose($primeira);
echo("\n");

echo ("3. Crie um programa que converta a string `'{'nome':'Vinicius','anoNascimento':1997,'profissao':'Dev'}'` em um objeto.\n\n");

$jaison = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
print_r($jaison);
//Objeto
$decod = json_decode($jaison);
print_r($decod);
//Array
$decod1 = json_decode($jaison, true);
print_r($decod1);


?>