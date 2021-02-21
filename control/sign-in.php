<?php
session_start();
include_once('../component/db-connection.php');


if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $connect->query($sql);

    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);


    if ($count == 1) {
        $_SESSION["isAdmin"] = $user["is_admin"];
        $_SESSION["usersEmail"] = $user['email'];
        header("Location: ../menu.php");
    } else {
        echo "<h1> Nie udało się :( Błędny login lub hasło</h1>";
    }
}
?>