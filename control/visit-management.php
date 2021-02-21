<?php
include_once('../component/db-connection.php');
$confirmationStatus = 1;
//$to = '';

if (isset($_POST["confirm"])) {
    $id = $_POST["confirm"];
    $sql = "UPDATE visit SET is_confirm = $confirmationStatus WHERE PK_visit = '$id'";

    /* $msg = "Twoja wizyta została potwierdzona";
     $msg = wordwrap($msg, 70);
     $subject = 'Anulowanie wizyty';
     mail($to, $subject, $msg, $headers);*/
}
if (isset($_POST["cancel"])) {
    $id = $_POST["cancel"];
    $sql = "DELETE FROM visit WHERE PK_visit = '$id'";

  /*  $msg = "Twoja wizyta została anulowana";
    $msg = wordwrap($msg, 70);
    $subject = 'Anulowanie wizyty';
    mail($to, $subject, $msg, $headers);*/
}

$connect->query($sql);
header("Location: ../visits.php");
?>