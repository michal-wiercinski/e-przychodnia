<?php
session_start();
include_once('../component/db-connection.php');
if (isset($_POST["registration-email"]) && isset($_POST["registration-password"])) {
    $email = $_POST["registration-email"];
    $password = $_POST["registration-password"];
    $isAdmin = 0;

    $sql = "INSERT INTO user (email, password, is_admin) 
            VALUES('$email','$password', '$isAdmin');";
    $connect->query($sql);
    $connect->close();
    header("Location: ../index.php");
}
