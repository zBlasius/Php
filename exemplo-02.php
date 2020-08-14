<?php

/* 
$nomeCompleto = "Gustavo Blasius";

$anoNascimento = 2001;

$nome1 = "João";

 $1nome ="maria"; // não permitido números por primeiro
*/

$nome = "Gustavo";

$sobrenome = "Blasius";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

exit;


$_nome = "Caractere especial"; // único caractere especial permitido

echo "</br>";

echo $nome1;

unset($nome1 /* $ex2 , $ex3 */ ); // Isso limpa o conteúdo da variável

if (isset($nome1)){ // se a variável existe, escreva ela
	echo $nome1;
}




?>