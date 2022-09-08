<?php
include ("pessoa.php");

$pessoa = new Empregado("nome","sobrenome","salario");
$nome = "Mikael";
$sobrenome = "Alves";
$salario = 1.212;
$salarioanual = 14.544;
$aumento =  ($salarioanual * 12) / 10; 

echo "<p> Primeiro Nome: " .$nome. "<p>";
echo "<p> Sobrenome: " .$sobrenome. "<p>";
echo "<p> Salário Mensal sem aumento: R$" .$salario. ". Salário Anual sem aumento: R$" .$salarioanual.
  ". Salário Anual com aumento de 10%: " .number_format($aumento,3,".","."). "</p>";

?>