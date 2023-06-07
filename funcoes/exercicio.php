<?php


    $lista = ["Arroz", "Sal", "Vinagre", "Sabão"];


    function listaParaString($arr){

        $str = "Você levou os seguintes itens do mercado: ";

        for ($i < 0; $i < count($arr); $i++) {

            $str .= "$arr[$i], " ;
        }


        return $str;
    }


    echo listaParaString($lista);
?>