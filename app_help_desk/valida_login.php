<?php
session_start();
$usuario_autenticado = false;

//cria uma variavel que armasena os valores dos email e senhas
$usuario_cadestrado =[
    ['email' => 'admi@senai.br',
    'senha' => '12345'
    ],
    ['email' => 'suporte@senai.br',
    'senha' => 'a1b2c3'
    ],
    ['email' => 'aluno@senai.br',
    'senha' => 'abcde'
    ]

];

// cria uma foreach que aprevia a variavel $usuario_cadastrado para $user
foreach ($usuario_cadestrado as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}
//se usuario = a verdadeiro irá validae
if ($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM';
    echo "Usuário autenticado com sucesso";
}else{
    $_SESSION['autenticado'] = 'NÃO';
    // echo"Usuário ou senha incorreto";
    header ('Location: index.php?login=erro');
}
?>