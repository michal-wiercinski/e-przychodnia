<?php
session_start();
include_once('../component/db-connection.php');

$patient = $_POST["patient"];
$patientsData = explode(" ", $patient);
$patientsName = "$patientsData[0]  $patientsData[1]";
$patientsPesel = $patientsData[3];

$specialization = $_POST["specialization"];
$date = $_POST["date"];
$usersEmail = $_SESSION["usersEmail"];
$startConfirmStatus = 0;
$sql = "INSERT INTO `visit` (patient, pesel, doctor, date, is_confirm, users_email) 
        VALUES ('$patientsName', '$patientsPesel', '$specialization', '$date', '$startConfirmStatus', '$usersEmail');";
$connect->query($sql);
header("Location: ../visits.php");
?>


