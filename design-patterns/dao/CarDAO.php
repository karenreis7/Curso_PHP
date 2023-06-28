<?php

include_once ("models/Car.php");

class CarDAO implements CarDAOinterface{

    private PDO $conn;

    public function __construct(PDO $conn) {
    $this -> conn = $conn;
    }

    public function findAll(){
        $cars = [];
        $stmt = $this -> pdo -> query ("SELECT * FROM cars");

        $data = $stmt -> fetchAll();

        foreach ($data as $car) {
            $car = new Car();
            $car ->setId($car ["id"]);
            $car ->setBrand($car ["brand"]);
            $car ->setKm($car ["km"]);
            $car ->setColor($car ["color"]);

            $cars [] = $car;
        }
            return $cars;
    }

    public function create(Car $car){
    $stmt = $this -> conn -> prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");
    $stmt ->bindParam(":brand", $car ->getBrand());
    $stmt ->bindParam(":km", $car ->getKm());
    $stmt ->bindParam(":color", $car ->getColor());

    $stmt -> execute();
    }
}