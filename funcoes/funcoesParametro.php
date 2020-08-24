<?php  

function ola($texto = "visitante" , $periodo="Bom dia"){ // caso nao tenha valor, irá escrever "teste"

	return "Olá $texto $periodo <br>";  // $texto = parâmetro da função

}

echo ola();
echo ola("Gustavo", "Boa noite");
echo ola("Visitante!", "Boa tarde");


// #####################################

function ola2($texto2, $periodo2="good morning"){

	return "Hello $texto2, $periodo2 <br>";

}

echo ola2();
echo ola2("Gustavo");
echo ola2("Lari", "good afternoon!")

// para o $texto2 que não foi definido nenhuma msg, é obrigatória definir algo pra ele na linha 22
// para corrigir o erro existente, preencha algo na linha 22
?>

Conclusão: se houver alguma variável no escopo sem valor, deve ser colocado ao chamar a função.