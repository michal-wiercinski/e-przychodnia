<?php
session_start();
include_once('../component/db-connection.php');
if (isset($_POST["name"]) && isset($_POST["surname"])
    && isset($_POST["specialization"]) && isset($_POST["city"])
    && isset($_POST["salary"])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $specialization = $_POST["specialization"];
    $city = $_POST["city"];
    $salary = $_POST["salary"];;

    $sql = "INSERT INTO doctor (name, surname, specialization, 	city, salary) 
            VALUES('$name','$surname', '$specialization', '$city', '$salary');";
    $connect->query($sql);
    $connect->close();
    header("Location: ../doctors.php");
}
