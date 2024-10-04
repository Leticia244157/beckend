<?php
//chamar as variaves
$i = 30;
$contador = 1;
//usamos verdadeiro ou falso
if($i>0)
//usamos o while para fazer a sequencia 
    do{
        if($contador %2 != 0)
        //chamamos as variaveis para mostrar os resultados
        echo "O contador par é: $contador <br>";
        $contador++;
    }

while($contador<=$i)
?>