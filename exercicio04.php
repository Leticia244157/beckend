<?php
//usando incrementio
for ($i = 1; $i <=10; $i++){
    echo $i . " ";
    echo($i % 2!=0) ?'(impar)':'(par)';
    echo "-";
switch (true){
    case ($i >= 1 && $i <= 3):
        echo "Baixo";
        break;
    case ($i >= 4 && $i <=7):
        echo "Medio";
        break;
    case ($i >=8 && $i <= 10):
        echo "Alto";
        break;
    default:
        echo "Número não reconhecido";
        break;
    }

}

echo'<br>';
?>