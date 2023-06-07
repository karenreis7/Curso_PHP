<?php

// Array associativo
$carro = [
    'marca' => 'BMW',
    'motor' => '2.4',
    'teto solar' => true,
    'cambio' => 'Manual',
    'portas' => 4
];

// mostrar as chaves do array

$chaves = array_keys($carro);

print_r($chaves);

// mostrar os valores

$valores = array_values($carro);

print_r($valores);

