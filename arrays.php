<?php
// definição da array
$lista_frutas = array ("Banana", "Maçã", "Morango", "Uva","Abacaxi","Franboesa","Laranja","Melão","Pera","Jabuticaba","Mamão","Abacate","Acerola","Açaí","Amora");

echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0]; //isso mostra fruta escolida
echo "<hr>";
echo '</pre>';
//Alternando o valor 0 -> Banana para Melancia

echo '<pre>';
$lista_frutas[0] = "Melancia";
print_r($lista_frutas);
echo '</pre>';

echo "<br>";

echo $lista_frutas[0];

?>

