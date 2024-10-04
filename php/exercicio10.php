<?php
// definição da array
$lista_numero = array ("1", "2", "3", "4","5","6","7","8","9","10");


echo '<pre>';
print_r ($lista_numero);
echo $lista_numero[0]; 
echo '<br>';
echo $lista_numero[4];
echo '<br>';
echo $lista_numero[9]; //isso mostra o numero
//fazer um risco pra dividir a tabela
echo "<hr>";
echo '</pre>';


echo '<pre>';
//definir o valor da posição
$lista_numero[0] = "100";
$lista_numero[4] = "500";
$lista_numero[9] = "1000";
print_r($lista_numero);
echo '</pre>';
echo $lista_numero[0];
echo '<br>';
echo $lista_numero[4];
echo '<br>';
echo $lista_numero[9];

?>
