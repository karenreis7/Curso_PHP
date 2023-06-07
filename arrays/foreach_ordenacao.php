<?php

$pessoa = [
    'nome' => 'Karen',
    'idade' => 25,
    'profissao' => 'Programadora'
];

foreach ($pessoa as $item => $value){

    echo "$item => $value \n";
}

$ordenacao = [12, 1, 3, 4, 43, 13, 76, 32, 55, 34,];

$soma = array_sum($ordenacao);
print_r($soma);

// crescente
sort($ordenacao);

print_r($ordenacao);

// decrescente
rsort($ordenacao);

print_r($ordenacao);

$idade = [
    'Karen' => 25,
    'Girlane' => 44,
    'Gilza' => 63,
    'Athena' => 1
];

asort($idade);

print_r($idade);


?>