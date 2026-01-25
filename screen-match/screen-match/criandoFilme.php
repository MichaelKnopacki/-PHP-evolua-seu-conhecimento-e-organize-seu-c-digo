<?php

require __DIR__ . "/src/funcoes.php";

$teste = criarFilme ( "Michael", 2035, 8.8, "comedia" );
print_r($teste);

$teste2 = criarFilme2 ( 
    ano: 2053, 
    nome: "Knopacki", 
    nota: 7.2,
    genero: "ironico" );
print_r($teste2);

?>