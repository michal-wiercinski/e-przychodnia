<?php
include_once('../component/db-connection.php');
$id = $_POST["delete"];
$sql = "DELETE FROM doctor WHERE PK_doctor='$id';";
$connect->query($sql);
header("Location: ../doctors.php");
?>
