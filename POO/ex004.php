<?php
require_once('ex04.php');

$pro1 = new professor();
$pro1->nome = 'Matheus';
$pro1->diciplina = 'Mathematica';
// $pro4->CPF = 176365875-80;
// $pro5->salario = 9538.48;

$pro1->ensinar();
    echo"<hr>";
    
$pro1->corrigirProva();
    echo"<hr>";

$pro1->prepararAula();
    echo"<hr>";

$pro1->simularFazerChamada();
    echo"<hr>";

$pro1->simularCorrigirTarefa();
    echo"<hr>";

?>

