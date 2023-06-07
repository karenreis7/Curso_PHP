<?php
class Pessoa {

    public $nome;
    public $idade;

    function __construct ($novoNome, $idade){
        echo "Contrutor Invocado! <br>";
        $this -> nome = $novoNome;
        $this -> idade = $idade;
    }

    function apresentar(){
        return "Olá, $this->nome! $this->idade anos ";
    }
}

$pessoa = new Pessoa('Karen', 25);

echo $pessoa ->apresentar();
