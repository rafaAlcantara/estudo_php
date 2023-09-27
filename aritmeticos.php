<?php
    echo " hello word";

    $a = 10;
    $b = 20;

    /*
    +$a	Identidade	- Conversão de $a para int ou float conforme apropriado.
    -$a	Negação	- Oposto de $a.
    $a + $b	Adição -	Soma de $a e $b.
    a - $b	Subtração -	Diferença entre $a e $b.
    $a * $b	Multiplicação -	Produto de $a e $b.
    $a / $b	Divisão -	Quociente de $a e $b.
    $a % $b	Módulo -	Resto de $a dividido por $b.
    $a ** $b Exponencial -	Resultado de $a elevado a $b.
    */

    $sub = $a - $b;
    echo "<br>Subtração: ".$sub;

    $mult = $a * $b;
    echo "<br>Multiplicação: ".$mult;

    $div = $a / $b;
    echo "<br>Divisão: ".$div;

    $modulo = $a % $b;
    echo "<br>Modulo: ".$modulo;

    $exp = $a ** 3;
    echo "<br>Exponenciação: ".$exp;

 



?>
