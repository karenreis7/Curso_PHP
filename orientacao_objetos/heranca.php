<?php

class Humano{
    public $nome = 'Karen';
    public $idade = 25;
    public $corDosOlhos = 'preto';
    public  $etnia = 'parda';
    private const RG = 1363973;


    public function Falar(){
        return "Olá $this->nome, Seja Bem-vindo (a)!";
    }
}

class Programador extends Humano {

    private $registro = 4567985;
    private $documentoImportante = 'Classe A';
}

$karen = new Humano();

echo $karen -> Falar();