<?php
$valor="Maria"
//Criei uma array
$nome = array("Maria", "João", "Leticia", "Matheus", "Joana", "Bruna", "Enzo", "Emanuelly", "Felipe");

$indice = array_search($valor)

//verificar se "banana" esta na array frutas
if ($indice !== false){
    //se "banana" estiver na array exibir mensagem
    echo "$valor está na lista de frutas";

}else{
    //se não estiver exibir
    echo "$valor não esta na lista de frutas";
}
?>