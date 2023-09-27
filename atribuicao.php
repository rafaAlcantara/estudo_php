<h2>Operadores de atribuição</h2>

<?php
/*

$a += $b	$a = $a + $b	Adição
$a -= $b	$a = $a - $b	Subtração
$a *= $b	$a = $a * $b	Multiplicação
$a /= $b	$a = $a / $b	Divisão
$a %= $b	$a = $a % $b	Módulo
$a **= $b	$a = $a ** $b	Exponentiation

*/
echo "<h3>Exemplos</h3>";
$a = 5;

echo "Atribuição com soma: ". $a +=3 . "\n"; // 8
echo "Atribuição com subtração: ". $a -=2 . "\n"; // 6
echo "Atribuição com multiplicação: ". $a *=5 . "\n"; // 30
echo "Atribuição com divisão: ". $a /=10 . "\n"; // 3
echo "Atribuição com módulo: ". $a %=2 .  "\n"; // 1
echo "Atribuição com exponenciação: ". $a **=2 . "\n"; // 1
?>

