<?php


//atividade 2
//Variaveis
$nome = "Leticia";
//chamando as variaveis 
$mensagem = ($nome == "Leticia") ? "Olá, Leticia!" : "Olá, Visitante!";
echo $mensagem;
echo'<br>';

//atividade 3
//Variaveis
$is_logged_in = false ;
//chamando as variaveis 
$comentario = $is_logged_in ? "Bem-Vindo de volta": "Por favor, faça login";
echo $comentario;
echo'<br>';

//atividade 1
//Variaveis numericas 
$idade = 23;
//chamando as variaveis 
$resultado = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $resultado;
echo'<br>';

echo "$mensagem. $comentario ,Você é $resultado.";


?>