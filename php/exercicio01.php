<?php

//define as variaveis
$media= '0';
$nota1= '8';
$nota2= '7';
$nota3= '10';

//chama as variaveis 
echo "A 1° nota é $nota1 <br/>";
echo "A 2° nota é $nota2 <br/>";
echo "A 3° nota é $nota3 <br/>";

//faz os calculos 
$media=($nota1+$nota2+$nota3)/3;

//faz o verdadeiro ou falso 
echo "Sua nota final é $media";
if ($media < 7){;
    echo"Você foi reprovado";
}else{
    echo "Você foi aprovado";
}
echo '<br>';

//chama a media final 
echo "Sua média é $media";

?>