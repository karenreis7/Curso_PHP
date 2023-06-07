<?php


class A {

    public $publico = 'Publico';
    protected  $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        echo "Class A) Publico = {$this->publico}";
        echo "Class A) Protegido = {$this->protegido}";
        echo "Class A) Privado = {$this->privado}";
    }
}


?>