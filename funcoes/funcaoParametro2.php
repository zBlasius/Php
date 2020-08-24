<?php  

function ola(){

	$argumentos = func_get_args();

	return $argumentos;
}

var_dump(ola("Bom dia", 10));

/* Mas onde vou usar isso? essa função me diz quantos valores foram recebidos. No exemplo foram 2 ("bom dia", 10);
então, eu posso fazer uma ação caso o usuário digite 2 valores, ou caso digite 3, ou nenhum valor. 

?>