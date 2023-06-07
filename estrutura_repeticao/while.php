<?php


$arr = [10, "Jesus", true, " Cristo", 4, " Maria", 10.3];

$x = count($arr);
$i = 0;


while ($i < $x ){
    if (is_string($arr[$i])){
        echo $arr[$i];
    }

    $i++;
}