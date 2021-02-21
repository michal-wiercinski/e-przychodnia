<?php
include_once('./component/db-connection.php');
$id = $_POST["delete"];
$sql = "DELETE FROM patient WHERE PK_patient='$id';";
$connect->query($sql);
header("Location: ../patients.php");
?>
