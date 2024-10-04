<?php

//Foi feita a declaração  das variáveis
$nome = '- Leticia<br>';
$escola = '- SESI Cerquilho<br>';
$CE = '- 428<br>';
$curso = '- Desenvolvimento de Sistemas<br>';
$media = '- 9.5<br>';
$cidade = '- Cerquilho<br>';

//Aqui será chamado o resultado das variáveis na página
echo 'Olá, Bem Vindo ao SESI-SP <br><br>';
echo $nome;
echo $escola;
echo $CE;
echo $curso;
echo $media;
echo $cidade ;
echo '<br>';
echo "Olá $nome. Seja bem vindo ao $escola $CE. Sua média no curso é de $media";

?>