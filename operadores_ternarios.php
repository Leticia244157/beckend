<?php

//Variaveis
$is_logged_in = false ;
//chamando as variaveis 
$comentario = $is_logged_in ? "Bem-Vindo de volta": "Por favor, faça login";
echo $comentario;
echo'<br>';


//Variaveis
$nome = "Leticia";

//chamando as variaveis 
$mensagem = ($nome == "Leticia") ? "Olá, Leticia!" : "Olá, Visitante!";
echo $mensagem;
echo'<br>';

//Variaveis numericas 
$idade = 23;

//chamando as variaveis 
$resultado = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $resultado;
echo'<br>';

echo "$mensagem. $comentario ,Você é $resultado.";


?>