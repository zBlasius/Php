<?php  

/* $nome = $_GET["a"]; //toda informação vindo do get será string

$nome2 = $_GET["b"];

// $nome = (int)$_GET["a"];    // uma conversão para inteiro

var_dump($nome, $nome2);

echo "</br>", $nome, $nome2;

*/ 

// Como pegar o IP do usuário? 

$ip = $_SERVER["REMOTE_ADDR"]; // descobre o ip

$ip = $_SERVER["SCRIPT_NAME"]; // diz qual pasta o usuário entrou.

?>

