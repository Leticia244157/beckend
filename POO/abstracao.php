<?php
//Modelo -> Entidade

class Funcionario{

    //Atributos -> Caracteristicas    
    public $nome = 'Leticia';
    public $telefone = '(15)99747-3369';
    public $numFilhos = 2;

    //Métodos -> Ações
    function resumirCadFunc(){
        //'Esse é o resumo do cadastro do funcionario'
        return "$this->nome possui $this->numFilhos filho(s)";
    }

    function modificaNumfilho($numFilhos){
        //Mudar o numero de filhos
        $this->numFilhos = $numFilhos;
    }

    function modificarNome($AlterarNome){
        $this->nome = $AlterarNome;
    }

    function exibirNome(){
        return "$this->nome possui $this->numFilhos filho(s)";
    }
}

//Objeto -> Identidade
$y = new Funcionario();
echo $y->resumirCadFunc(); // Para acessar atributos ou métodos usando o ->
echo '<hr>';
$y->modificaNumfilho(3);
echo $y->resumirCadFunc(); // Exibe o resumo com o número de filhos atualizado
echo '<hr>';

$x = new Funcionario();
$x->modificarNome('Ingrid');
echo $x->resumirCadFunc();
echo '<hr>';
?>
