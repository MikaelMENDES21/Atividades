<?php
  include("invoice.php");

  $Invoice = new Invoice(10,4,"quantidade comprada",54);
  $Invoice->_preco = 100.55 ;
  $Invoice->_qtdc = 3;
  $Invoice->_descricao = "Fone Gamer feito para o público que gosta de jogar no celular e no computador. Sua bateria tem 2.500 mAH, tem até 7 horas de duração e sua bateria carrega em 30 minutos.
  Tem ajuste de tamanho.";



  echo "<p> Descrição do produto: " . $Invoice->_descricao . "<p>";
  echo "<p> Quantidade comprada: " . $Invoice->_qtdc . "<p>"; 
  echo "<p> Preço Unitário: R$".$Invoice->_preco."</p>";
?>