<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./menu.php">ePrzychodnia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="./doctors.php">Lekarze <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./patients.php">Pacjenci</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./visits.php">Wizyty</a>
      </li>
    </ul>
  </div>
  <div class="float-right">
    <a class="btn btn-primary" href="./control/logout.php"> Logout</a>
  </div>
</nav>