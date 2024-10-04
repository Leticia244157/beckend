<?php
$tabu= "Tabuada";
echo "$tabu <br>";

//Declarar função
function vezes($num){
    //Chamar for
    for ($i = 1; $i <=10; $i++){
            $resultado= $num*$i;
            //Chamar o texto 
            echo "$num x $i= $resultado <br>";
    }
}
    //Declarar valor
    $num = 2;
    vezes($num);

?>