<?php 

$nome = "Gustavo";
$site = 'www.gustavo.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
//////////////////////////////////////q

$frutas = array("abacaxi", "laranja", "manga");

// echo $frutas[2];   (manga)

$nascimento = new DateTime(); // new tem a ver com POO (programação orientada a objetos)

//var_dump($nascimento); // mostra qual o tipo de dado
////////////////////////////////////////////////////////

$arquivo = fopen("exemplo-02.php", "r");

//var_dump($arquivo);

$nulo = NULL; // ausência de valor
$vazio = ""; // sem valor, mas foi iniciado
// importante gravar essa diferença

?>