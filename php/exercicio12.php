<?php
// Criando a Array 
$cadastro = [];

//Criando uma Array pessoas, dentro da Array $cadastro
$cadastro ['nome'] = ['Julia', 'Leticia', 'Ana', 'Enzo', 'João'];
//Criando uma Array senha, dentro da Array  $cadastro
$cadastro ['email'] = ['julia@gmail.com', 'leticia@gmail.com', 'ana@gmail.com', 'enzo@gmail.com', 'joao@gmail.com'];


echo '<pre>';
print_r ($cadastro);
echo '</pre>';

echo "<hr>";
// Alterando o terceiro valor da array pessoas
$cadastro['nome'][1] = 'Senai';

// Alterando o segundo valor da array senha
$cadastro ['email'][0] = 'aluno@senai.br';

echo "O segundo valor da array pessoa agora é:";
echo $cadastro ['nome'][1];

echo "<br>";

echo "O segundo valor da array senha agora é:";
echo $cadastro ['email'][0];

echo '<pre>';
print_r ($cadastro);
echo '</pre>';


?>