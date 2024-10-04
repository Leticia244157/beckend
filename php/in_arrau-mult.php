<?php
//criar uma array
$usuario = [
    ["id" => 1,
    "email" => "joao@exemplo.com"],
    ["id" =>2,
    "email" => "leticia@exemplko.com"],
    ["id" =>3,
    "email" => "matheus@exemplo.com"]
];

$busca = "matheus@exemplo.com";
echo '<pre>';
print_r($usuario);
echo '</pre>';

//procurar o valor
$indice = array_search($busca, array_column($usuario, 'email'));

//verificar se não é igual a falso 
if($indice !== false){
    echo "$busca doi encontrada com o ID:". $usuario[$indice]['id'];

}else{
    //Se o valor não for encontrado mostrar isso
    echo "$busca não foi encontrada na lista de usuário.";
}
?>