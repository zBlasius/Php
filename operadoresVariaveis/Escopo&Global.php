<?php 

// O que são escopos e variáveis globais?
/* Pode-ser pensar no escopo como um conteiner local, onde as variáveis podem ser declaradas apenas dentro ou globalmente, veja o exemplo */

$varGlobal = "Variável global";

function escopo1(){

	global $varGlobal;  // para chamar a variável global
	echo  $varGlobal;

	$varLocal = "Variável válida apenas neste escopo 1";

}

function escopo2(){

	$varGlobal = "   mudou a variável, teste";
	echo $varGlobal;

	$varLocal2 = "Variável válida apenas localmente 2";

}

escopo1();
escopo2();

?>