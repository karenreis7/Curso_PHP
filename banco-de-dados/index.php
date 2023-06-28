<?php



$host = "localhost";
$user = "root";
$pass = "";
$dbname = "owl";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn -> connect_errno){
    echo "Erro na conexão";
    echo "Erro:" . mysqli_connect_error();
}

