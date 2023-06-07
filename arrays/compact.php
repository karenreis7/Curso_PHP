<?php


    $marca = "BMW";
    $motor = "3.0";
    $tetosolar = true;
    $porta = 4;


    $carro = compact("marca", "motor", "tetosolar", "porta");


    print_r($carro);




    $animal = "Cavalo \n";
    $raca = "Quarto de Milha \n";
    $peso = "140kg \n";
    $cor = "marrom \n";

    $animal2 = compact("animal", "raca", "peso", "cor");

   foreach ($animal2 as $item => $value){
       echo  "$item: $value";
   }

?>