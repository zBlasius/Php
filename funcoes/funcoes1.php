<?php  

//passagem de parâmetro por valor
//quer dizer que: O que acontecer na variável fica na variável

$a = 10;

function trocaValor($a){

	$a = 50;  // dica: para verifica se chamou realmente a var $a, coloquei o +=, pois se for irá retornar 60  (50 + 10)

	return $a;
}
/* O QUE ACONTECE NA FUNÇÃO FICA SOMENTE NA FUNÇÃO
eu tinha pensado que o $a passaria a valer 50 até fora da função, mas me equivoquei  */
//variável é uma coisa e parâmente de função é outra


/* Isso acontece pois o local em que definimos a var $a ficou em um local, e o parâmetro de trocaValor ficou em outro lugar. Então um endereço de memória não tem a ver com o outro */


echo trocaValor($a);

echo "</br>";

echo $a;
?>