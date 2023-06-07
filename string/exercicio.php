<?php

    $arr =[
        'porta' => 100,
        'maçaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 6,
        'vidro' => 40,
        'tampa' => 23
    ];


    function itensCaros(){

        global $arr;
        $arrItensCaros = [];

        foreach ($arr as $item => $preco){

            if ($preco > 10){
                array_push($arrItensCaros, $item);
            }
        }

        return $arrItensCaros;
    }

  $novoArr = itensCaros($arr);
    print_r($novoArr);

    $nome = "Karen";

    printf("O nome é %s ", $nome);

