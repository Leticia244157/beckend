<?php
require_once('ex03.php');

$pessoa1 = new pessoa();

$pessoa1->nome ='Matheus';
$pessoa1->idade = 17;
// $pessoa4->CPF = 176365875-80;
// $pessoa5->endereco = "Sesi-428 Cerquilho-sp ";

$pessoa1->apresetar();
    echo"<hr>";
    
$pessoa1->caminhar();
    echo"<hr>";

$pessoa1->falar();
    echo"<hr>";

$pessoa1->simularComer();
    echo"<hr>";

$pessoa1->simularDormir();
    echo"<hr>";
?>

