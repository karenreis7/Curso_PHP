<?php

    $arr = ["teste", "olá", "janela", "carro"];


    $teste = implode(", ", $arr);

    echo $teste;

    function multiplicacao(){

        $x = 5;
        $y = 10;
        $z = 8;

        $resultado = $x * $y * $z;

        echo $resultado ;
    }

   function Dados($nome, $idade){

        echo "Olá eu sou o (a) $nome e tenho $idade anos \n";

    }


    function ParImpar($numero){
        if ($numero % 2 ===  0){
            echo "Esse numero é Par!";
        }else{
            echo "Esse numero é impar!";
        }
    }

    ParImpar(7);
?>