<?php
// Criando a Array 
$cadastro = [];

//Criando uma Array pessoas, dentro da Array $cadastro
$cadastro ['pessoas'] = ['João', 'Maria', 'Pedro'];
//Criando uma Array senha, dentro da Array  $cadastro
$cadastro ['senha'] = ['1234', 'abcd', '5678'];

echo '<pre>';
print_r ($cadastro);
echo '</pre>';

echo "<hr>";
// Alterando o terceiro valor da array pessoas
$cadastro['pessoas'][1] = 'Ana';

// Alterando o segundo valor da array senha
$cadastro ['senha'][1] = 'efgh';

echo "O segundo valor da array pessoa agora é:";
echo $cadastro ['pessoas'][1];

echo "<br>";

echo "O segundo valor da array senha agora é:";
echo $cadastro ['senha'][1];

echo '<pre>';
print_r ($cadastro);
echo '</pre>';


?>