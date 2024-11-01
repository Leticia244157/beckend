<?php
//Modelo -> Entidade

class Funcionario{

    //Atributos -> Caracteristicas    
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //setters
    function __set($atributos, $valor){
        $this->$atributos = $valor;
    }

    //getters
    function __get($atributos){
        return $this->$atributos;
    }

    function resumirCadFunc(){
        //'Esse é o resumo do cadastro do funcionario'
        // return "$this->nome possui $this->numFilhos filho(s)"
       
        return $this->__get('nome').' possui '. $this->__get('numFilhos').' filho(s)';
    }
    
}

$y = new Funcionario();
$y->__set('nome', 'Leticia');
$y->__set('numFilhos',3);
echo $y->resumirCadFunc();


?>
