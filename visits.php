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
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Wizyty</title>
</head>
<body>
<?php
include_once('component/navbar.php');
?>
<div class="container">
    <?php
    if ($_SESSION["isAdmin"] == 1) {
        include_once('component/visit-form.php');
    }
    ?>
  <div>
      <?php
      $isAdmin = $_SESSION["isAdmin"] == 1;
      if ($isAdmin) {
          echo "<h3>Wizyty </h3>";
      } else {
          echo "<h3>Moje wizyty </h3>";
      }
      ?>
    <table class="table table-responsive-md btn-table">
      <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Pacjent</th>
        <th scope="col">PESEL</th>
        <th scope="col">Lekarz</th>
        <th scope="col">Data</th>
        <th scope="col">Status</th>
          <?php
          if ($isAdmin) {
              echo "<th scope='col'>Akcja</th>";
          }
          ?>
      </tr>
      </thead>
      <tbody>
      <?php
      if ($isAdmin) {
          $sql = "SELECT * FROM visit";
      } else {
          if (isset($_SESSION["usersEmail"])) {
              $usersEmail = $_SESSION["usersEmail"];
              $sql = "SELECT * FROM visit WHERE users_email='$usersEmail'";
          }
      }
      $result = $connect->query($sql);
      while ($row = mysqli_fetch_row($result)) {
          $isAfter = $row[4] < date("Y-m-d");
          if ($isAfter) {
              echo "<tr class=''>";
          } else {
              echo "<tr class='table-warning'>";
          }
          echo "<td> $row[0] </td>";
          echo "<td> $row[1] </td>";
          echo "<td> $row[2] </td>";
          echo "<td> $row[3] </td>";
          echo "<td> $row[4] </td>";
          if ($row[5] == 0) {
              echo "<td> Nie </td>";
          } else {
              echo "<td> Tak </td>";
          }

          echo "<td>";
          echo "<form action='./control/visit-management.php' method='post'>";
          if ($isAdmin) {
              if (!$isAfter) {
                  echo "<button type='submit' class='btn btn-success' name='confirm' value='$row[0]'>Potwierdź wizytę</button>";
                  echo "<button type='submit' class='btn btn-danger' name='cancel' value='$row[0]'>Anuluj wizytę</button>";
              } else
                  echo "<button type='submit' class='btn btn-danger' name='cancel' value='$row[0]'>Usuń wizytę</button>";
          } else {
              if (!$isAfter) {
                  echo "<button type='submit' class='btn btn-danger' name='cancel' value='$row[0]'>Anuluj wizytę</button>";
              }
          }
          echo "</form>";
          echo "</td>";
          echo "</tr>";
      }
      ?>
      </tbody>
    </table>
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