<?
include("redondo.php");

$forma = new redondo(0,0,0); 

echo "Ponto i: " .$geometria->Pontox = 1. "<br>";
echo "Ponto u: " .$geometria->Pontoy = 2. "<br>";
echo "Tamanho" .$geometria->Tamanho = 3. "<br>";
echo "Espaço" .$geometria->Espaco().  "<br>";

$geometria->Acionar(4);
echo"Acionar Ponto i: " .$geometria->Pontox. ", Ponto u: " .$geometria->Pontoy "<br>";

$geometria->Aumentar(12);
echo"Aumentar: " .$geometria->Tamanho. "<br>";

$geometria->Diminuir(6);
echo"Diminuir: " .$geometria->Tamanho ;

?>