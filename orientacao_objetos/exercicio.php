<?php


class Cachorro{

    function latir(){
        echo "estou latindo! \n";
    }

    function andar(){
        echo "Estou andando!";
    }
}

$athena = new Cachorro();

$athena ->latir();