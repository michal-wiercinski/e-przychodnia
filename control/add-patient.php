<?php
session_start();
include_once('../component/db-connection.php');
if (isset($_POST["name"]) && isset($_POST["surname"])
    && isset($_POST["pesel"]) && isset($_POST["city"])
    && isset($_POST["phone-number"]) && isset($_POST["date-birth"])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $pesel = $_POST["pesel"];
    $city = $_POST["city"];
    $phoneNumber = $_POST["phone-number"];
    $dateBirth = $_POST["date-birth"];
    $usersEmail  = $_SESSION["usersEmail"];

    $sql = "INSERT INTO patient (name, surname, pesel, 	city, phone_number, date_birth, users_email) 
            VALUES('$name','$surname', '$pesel', '$city', '$phoneNumber', '$dateBirth', '$usersEmail');";
    $connect->query($sql);
    $connect->close();
    header("Location: ../patients.php");
}
