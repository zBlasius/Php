<?php 

// esquema de comparação entre variáveis

$a = NULL;

$b = NULL;

$c = 10;

echo $a ?? $b ?? $c; /* Mostra o $a, se ele não existir(NULL) mosta o $b, se ele não existir mostra o $c */

?>