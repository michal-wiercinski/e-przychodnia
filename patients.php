<?php
include_once('component/db-connection.php');
?>
<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
        crossorigin="anonymous">

  <title>Pacjenci</title>
</head>
<body>
<?php
include_once('component/navbar.php');
?>
<div class="container">
    <?php
        include_once('component/patient-form.php');
    ?>
  <div class="wrapper">
    <form action="control/delete-patient.php" method="post">
      <table class="table table-striped table-responsive-md btn-table">
        <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Imie</th>
          <th scope="col">Nazwisko</th>
          <th scope="col">Pesel</th>
          <th scope="col">Miasto</th>
          <th scope="col">Numer telefonu</th>
          <th scope="col">Data urodzenia</th>
            <?php
            if ($_SESSION["isAdmin"] == 1) {
                echo "<th scope='col''>Akcja</th>";
            }
            ?>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($_SESSION["isAdmin"] == 1) {
            $sql = "SELECT * FROM patient";
        } else {
            if (isset($_SESSION["usersEmail"])) {
                $usersEmail = $_SESSION["usersEmail"];
                $sql = "SELECT * FROM patient WHERE users_email = '$usersEmail'";
            }
        }
        $result = $connect->query($sql);
        while ($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td> $row[0] </td>";
            echo "<td> $row[1] </td>";
            echo "<td> $row[2] </td>";
            echo "<td> $row[3] </td>";
            echo "<td> $row[4] </td>";
            echo "<td> $row[5] </td>";
            echo "<td> $row[6] </td>";
            if ($_SESSION["isAdmin"] == 1) {
                echo "<td> <button type='submit' class='btn btn-outline-danger' name='delete' value='$row[0]'>Usuń</button> </td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
      </table>
    </form>
  </div>
</div>
<?php
include('component/footer.php');
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>