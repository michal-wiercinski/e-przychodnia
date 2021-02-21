<?php
session_start();
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

  <title>Logowanie</title>
</head>
<body>
<form class="col-md-5 p-3 m-2 bg-secondary text-white" method="post" action="control/sign-in.php">
  <div class="form-group">
    <label for="email">Email: </label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="password">Hasło: </label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary" value="ok"> Zaloguj</button>
</form>

<div>
  <div id="accordion">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                  aria-controls="collapseOne">
            Zacznij od rejestracji
          </button>
        </h5>
      </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
           data-parent="#accordion">
        <div class="card-body">
          <form class="col-md-5 p-3 m-2 bg-secondary text-white" method="post"
                action="control/sign-up.php">
            <div class="form-group">
              <label for="registration-email">Email: </label>
              <input type="text" class="form-control" id="registration-email" name="registration-email">
            </div>
            <div class="form-group">
              <label for="registration-password">Hasło: </label>
              <input type="password" class="form-control" id="registration-password" name="registration-password">
            </div>
            <button type="submit" class="btn btn-primary" value="ok"> Zarejestruj</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include_once('component/footer.php');
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>