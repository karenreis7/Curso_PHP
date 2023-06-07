<?php

class Cachorro {

    public $nome;
    function escolherNome($nome){
        $this -> nome = $nome;
    }

    function latir(){
        return "Au Au \n";
    }

    function latirForte(){
        return strtoupper($this->latir());
    }
}

$animal = new Cachorro();

$animal -> escolherNome("athena");

echo "O nome do cachorro (a) é:  " . $animal->nome;



?>
