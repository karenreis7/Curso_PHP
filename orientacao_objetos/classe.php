<?php

class Pessoa{

    public $idade = 25;
    public $nome = "karen";

}

$karen = new Pessoa();
echo $karen ->nome;
echo "\n";
$karen -> nome = "Maria";
echo $karen -> nome;

class Car{

}

$corolla = new Car();
$bmw = new Car();
$miniCouper = new Car();
?>