<?php

    $str1 = "O rato roeu a roupa do rei de Roma";
    $str2 = "Esta não";

    echo strlen($str1) . "\n";
    echo strlen($str2) . "\n";

    $contadorDeAs = 0;


    for ($i = 0; $i < strlen($str1); $i++ ){

        if ($str1 [$i] == "a"){
            $contadorDeAs++;
        }
    }

    echo "O numero de A's na frase é: " . $contadorDeAs . "\n";

    echo strtoupper($str1) . "\n"; // Imprime tudo em Maiusculo
    echo ucfirst($str1) . "\n";
    echo ucwords($str1) . "\n";

    $str3 = "este item está em ";
    $str4 = "promocao";

    echo ucfirst($str3) . strtoupper($str4) . "\n";

    echo strrev($str4) . "\n";

    echo str_repeat($str1, 5);

    $str5 = "carro - navio - helicoptero - barco - jangada";
    print_r(explode("-" , $str5));
