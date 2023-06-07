<?php



class Carro {


    public $marca;
    public $cor;
    public $aro;
    public $portas;
    public $cilindrada;
    public $velocidade_maxima;


    function setVelocidadeMaxima($velocidade){
        $this -> $velocidade_maxima = $velocidade;
    }

    function getVelocidadeMaxima(){

        echo " A velocidade maxima ";
    }
}


?>