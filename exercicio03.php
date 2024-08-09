<?php
//define as variaveis
$compra= '500';
$desconto= '10';
$vip= '1';

//chama as variaveis 
echo "Sua compra foi de $compra <br/>";

//faz o verdadeiro ou falso 
if ($compra >=500.00){
     //informar o valor final
    echo"Cliente com desconto de $desconto % ";
}else if ($vip= 1){
    echo"Cliente com desconto de $desconto %";

}else{
    //informar o valor final
    echo "Cliente sem desconto";
}



?>