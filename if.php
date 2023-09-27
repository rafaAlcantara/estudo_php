<h2>Desvio condicional</h2>

<?php
/*
Sintaxe - desvio condicional simples 

if (expr)
  statement

  caso tenha somente uma linha de comando abaixo do if 
  nao ha necessidade de usar{ }

  para a estrutura abaixo e obrigatorio o uso de { }
if (expr){
    codigo1
    codigo2
}
*/
echo "<h3>Exemplos</h3>";
echo "<h4>Desvio condicional Simples</h4>";
$idade = 18;

if ($idade >= 18)
    echo "Você tem" . $idade. "anos, entao é maior de idade!";

echo "<p>";
if ($idade >= 18){
    echo "voce tem" . $idade. "anos entao é maior de idade!";
    echo "<br>Se for preso, vai dormir na cadeia!";
}


echo "<h4>Desvio condicional Composto</h4>";

$idade = 15;

if ($idade >= 18)
    echo "Você tem" . $idade. "anos, entao é maior de idade!";
else
    echo "Você tem" . $idade. "anos, entao é menor de idade!";

echo "<p>";
if ($idade >= 18){
    echo "você tem" . $idade. "anos entao é maior de idade!";
    echo "<br>Se for preso, vai dormir na cadeia!";
}else{
    echo "você tem" . $idade. "anos entao é menor de idade!";
    echo "<br>Se for preso, não pode dormir na cadeia!";
}

echo "<h4>Desvio condicional Encadeado</h4>";

$idade = 15;

if ($idade >= 18)
    echo "Você tem" . $idade. "anos, entao é maior de idade!";
else if ($idade >=6)
    echo "Você tem" . $idade. "anos, entao é menor de idade!";
else
    echo " você é bebê!!!";

echo "<p>";
if ($idade >= 18){
    echo "você tem" . $idade. "anos entao é maior de idade!";
    echo "<br>Se for preso, vai dormir na cadeia!";
}else if ($idade >=6){
    echo "você tem" . $idade. "anos entao é menor de idade!";
    echo "<br>Se for preso, não pode dormir na cadeia!";
}else{
    echo " você é bebê!!!";
}

echo "<h4>Operador Ternário</h4>";
echo "<p>O operador ternário é uma forma resumida de utilizar o IF</p>";
$idade = 6;

echo $idade<=5 ? "você é bebê" : "Você é jovem...";
//    condição ?  verdadeiro   :    falso 

?>