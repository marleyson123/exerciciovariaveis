<?php
$valor = $_POST['valor'];
$frete =  $_POST['frete'];
$despesas = $_POST['despesas'];
$valorfinal = $frete + $despesas + $valor;
$lucro = $valorfinal - $valor;
$porclucro = $lucro / $valor_final * 100;
echo"\nvalor final:{$valorfinal}";
echo"\nlucro:{$lucro}";
echo"\nporcentagem:.{$porclucro}";
?>