<?php

class coordenador{
    public $nome;
    public $departamento;
    protected $salario;
    private $CPF;

    public function coordenarTurmas(){
        echo"$this->nome esta coordenando a turma.";
    }

    public function planejarAulas(){
        echo"$this->nome esta planejando a aula.";
    }

    public function auxiliarProfessor(){
        echo"$this->nome esta auxiliando o professor.";
    }

    private function definirHora(){
        echo"$this->nome esta definindo os horarios .";
    }

    private function organizarReunioes(){
        echo"$this->nome esta organizando reunioes.";
    }

    public function simularDefinirHora(){
        $this->definirHora();
    }
    public function simularOrganizarReunioes(){
        $this->organizarReunioes();
    }


}
?>