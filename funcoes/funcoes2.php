<?php   
//passagem de parâmetro por referência
// muda a variável no endereço real dela

$a = 10;

function trocaValor(&$a){  // & = passagem por referência

	$a += 20;
	return $a;

}
echo $a;
echo "<br>";

echo trocaValor($a);
echo "<br>";

echo $a;
echo "<br>";
echo trocaValor($a);

echo "<br>";
echo $a;

echo "<br>";
echo trocaValor($a);

// se eu chamar a function várias vezes ele executa o código dentro dela várias vezes

?>