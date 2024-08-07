<?php
$media= '0';
$nota1= '8';
$nota2= '7';
$nota3= '10';

echo "A 1° nota é $nota1 <br/>";
echo "A 2° nota é $nota2 <br/>";
echo "A 3° nota é $nota3 <br/>";

$media=($nota1+$nota2+$nota3)/3;

echo "Sua nota final é $media";
if ($media < 7){;
    echo"Você foi reprovado";
}else{
    echo "Você foi aprovado";
}
echo '<br>';

echo "Sua média é $media";

?>