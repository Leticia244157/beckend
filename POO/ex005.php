<?php
require_once('ex05.php');

$p1 = new coordenador();

$p1->nome = 'Matheus';
$p1->departamento = 'new';
// $pro4->CPF = 176365875-80;
// $pro5->salario = 9538.48;

$p1->coordenarTurmas();
    echo"<hr>";
    
$p1->planejarAulas();
    echo"<hr>";

$p1->auxiliarProfessor();
    echo"<hr>";

$p1->simularDefinirHora();
    echo"<hr>";

$p1->simularOrganizarReunioes();
    echo"<hr>";
?>

