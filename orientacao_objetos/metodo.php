<?php


class Pessoa{

    function falar(){
        echo "Olá eu sou um objeto! \n";
    }
}

$karen = new Pessoa();

$karen -> falar();