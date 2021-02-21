<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-outline-primary" data-toggle="collapse" data-target="#collapseOne"
                aria-controls="collapseOne">Umów wizytę
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
         data-parent="#accordion">
      <div class="card-body">
        <form class="col-md-5 p-3 m-2 bg-secondary text-white" method="post"
              action="./control/create-visit.php">
          <div class="form-group">
            <div class="form-group">
              <label for="patients-list">Wybierz pacjenta</label>
              <select class="form-control" id="patients-list" name="patient" value="">
                  <?php
                  session_start();
                  if ($_SESSION["isAdmin"]) {
                      $sql = "SELECT * FROM patient";
                  } else {
                      if (isset($_SESSION["usersEmail"])) {
                          $usersEmail = $_SESSION["usersEmail"];
                          $sql = "SELECT * FROM patient WHERE users_email = '$usersEmail'";
                      }
                  }
                  $result = $connect->query($sql);
                  while ($row = mysqli_fetch_row($result)) {
                      echo "<option>$row[1] $row[2] - $row[5]</option>";
                  }
                  ?>
              </select>
            </div>
            <div class="form-group">
              <label for="specializations-list">Lekarz</label>
              <select class="form-control" id="specializations-list" name="specialization"
                      value="">
                  <?php
                  $sql = "SELECT * FROM doctor";
                  $result = $connect->query($sql);
                  while ($row = mysqli_fetch_row($result)) {
                      echo "<option>$row[3] - $row[1] $row[2]</option>";
                  }
                  ?>
              </select>
            </div>
            <div class="form-group">
              <label for="date">Data wizyty</label>
              <input type="date" id="date" name="date" value="">
            </div>

            <input class="btn btn-success" type="submit"
                   name="create-visit" value="Umów wizytę">
        </form>
      </div>
    </div>
  </div>
</div>
</div>