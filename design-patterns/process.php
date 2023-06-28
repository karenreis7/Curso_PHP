<?php

global $conn;
include_once ("conection.php");
include_once ("dao/CarDAO.php");

$carDao = new CarDAO($conn);

$marca = $_POST ["brand"];
$km = $_POST ["km"];
$color = $_POST ["color"];

$newCar = new Car();

$brand = [];
$newCar -> setBrand($brand);
$newCar -> setKm($km);
$newCar -> setColor($color);

$carDao -> create($newCar);
header("Location: index.php");