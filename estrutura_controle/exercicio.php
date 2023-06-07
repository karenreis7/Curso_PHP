<?php

    $velocity = 40;

    if ($velocity < 40){
        echo "Parabéns, você está na velocidade correta";
    }elseif ($velocity == 40){
        echo "Cuidado! não ultrapasse a velocidade";
    }else{
        echo "Atenção! Você foi multado.";
    }