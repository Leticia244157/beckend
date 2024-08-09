<?php
//define as variaveis
$salario= '2000.00';
$horas= '10';
$porcento= '20';
$dinheiro_porcento= '0';
$total= '0';

//chama as variaveis 
echo "Seu salario é de $salario <br/>";
echo "Você fez $horas extras  <br/>";
echo "Recebeu $porcento % a mais <br/>";

//faz o verdadeiro ou falso 
echo '<br>';
if ($salario >=2000.00){;
    //calculo
    $dinheiro_porcento=($salario*$porcento)/100;
    $total=$salario+$dinheiro_porcento;
     //informar o valor final
    echo"Seu salario é de R$ $total";
}else{
    //calculo
    $dinheiro_porcento=($salario*$porcento)/100;
    $total=$salario+$dinheiro_porcento;
    //informar o valor final
    echo "Seu salario é de R$ $total ";
}




?>