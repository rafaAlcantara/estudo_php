<?php
/*
    1- crie uma variavel do tipo array com o nome frutas
        esse array deve ter os seguintes elementos
        mamão, maça, melão

    2- utilizando as funções do array faça;
        a- inclusao de uma nova fruta no inicio do array * array_unshift
        b- inclusao de uma nova fruta no final do array * array_push 
        c- exclusão da fruta que esta na posição 01  
        d-exclusão da fruta que esta na ultima posição do array  *array_pop
        e- alteração da fruta que está na posição 01 por maracujá

    3- a cada alteração no array realize um print_r ou var_dump
     para comprovar os resultados obtidos.

*/

$fruta = ["mamão", "maça", "melão"];

array_unshift($fruta, "morango");

echo "<pre>";  
print_r($fruta);  
echo "</pre>";


array_push($fruta, "banana");

echo "<pre>";  
print_r($fruta);  
echo "</pre>";







array_pop($fruta);

echo "<pre>";  
print_r($fruta);  
echo "</pre>";


array_slice($fruta, 1)


?>
