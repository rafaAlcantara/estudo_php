<?php
//Funções de manipulação de array

/*
array_push — Adiciona um ou mais elementos no final de um array
array_pop — Extrai um elemento do final do array
array_shift — Retira o primeiro elemento de um array
array_unshift — Adiciona um ou mais elementos no início de um array
array_splice — Remove uma parte array e a substitui por outra coisa
count — Conta o número de elementos de uma variável, ou propriedades de um objeto

*/

$array = []; // variavel que recebe valor vazio
$vazio = ""; // variavel vazia tipo string

array_push($array, "Senac","TAU");

array_push($array, ["Igor", "samuel", "evelyn", "matheus", "estevan"]);
array_push($array[2], "Cauã");

array_push($array, "teste");


echo "<pre>";  // formata o mode de apresentação da saida
print_r($array);  // mostra o conteudo simplificado do array
echo "</pre>";

echo "<br> A variavel array possui " .count($array). " posições.",

array_pop($array);

echo "<pre>";  // formata o mode de apresentação da saida
print_r($array);  // mostra o conteudo simplificado do array
echo "</pre>";


//SHIFT
array_shift($array);

echo "<pre>";  // formata o mode de apresentação da saida
print_r($array);  // mostra o conteudo simplificado do array
echo "</pre>";

//UNSHIFT
array_unshift($array, "Bob esponja");

echo "<pre>";  // formata o mode de apresentação da saida
print_r($array);  // mostra o conteudo simplificado do array
echo "</pre>";

array_slice($array, 1, 1, "teste 2"); 

echo "<pre>";  // formata o mode de apresentação da saida
print_r($array);  // mostra o conteudo simplificado do array
echo "</pre>";

?>