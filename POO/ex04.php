<?php

class professor{
    public $nome;
    public $diciplina;
    protected $salario;
    private $CPF;

    public function ensinar(){
        echo"$this->nome esta ensinando.";
    }

    public function corrigirProva(){
        echo"$this->nome esta corrigindo a prova.";
    }

    public function prepararAula(){
        echo"$this->nome esta preparando aula.";
    }

    private function fazerChamada(){
        echo"$this->nome esta fazendo chamada.";
    }

    private function corrigirTarefa(){
        echo"$this->nome esta corrigindo a tarefa.";
    }

    public function simularFazerChamada(){
        $this->fazerChamada();
    }
    public function simularCorrigirTarefa(){
        $this->corrigirTarefa();
    }


}
?>