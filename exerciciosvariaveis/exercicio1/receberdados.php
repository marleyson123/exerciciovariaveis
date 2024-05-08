<?php
$num1 = $_POST ["num1"];
$num2 = $_POST ["num2"];

$soma = $num1 + $num2;
$mult = $num1 * $num2;
$div =  $num1 / $num2;
$sub =  $num1 - $num2;

echo "Você digitou o numero: {$num1}";
echo "<br>Você digitou o numero: {$num2}";
echo "<br>A soma dos numeros sao: {$soma}";
echo "<br>A multiplicação dos numeros sao: {$mult}";
echo "<br>A divisão dos numeros sao: {$div}";
echo "<br>A divisão dos numeros sao: {$sub}";







?>