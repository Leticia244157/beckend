<?php

class pessoa{
    public $nome;
    public $idade;
    protected $endereco;
    protected $CPF;

    public function apresentar(){
        echo"$this->nome esta se apresentando.";
    }

    public function caminhar(){
        echo"$this->nome vai para $this->endereco.";
    }

    public function falar(){
        echo"$this->nome esta conversando e disse que tem $this->idade anos.";
    }

    private function comer(){
        echo"$this->nome gosta de comer na casa da mãe.";
    }

    private function dormir(){
        echo"$this->nome é portador do CPF $this->CPF.";
    }

    public function simularComer(){
        $this->comer();
    }
    public function simularDormir(){
        $this->dormir();
    }

}
?>
