<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-outline-primary" data-toggle="collapse" data-target="#collapseOne"
                        aria-controls="collapseOne">Dodaj lekarza
                </button>
            </h5>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
             data-parent="#accordion">
            <div class="card-body">
                <form class="col-md-5 p-3 m-2 bg-secondary text-white" method="post"
                      action="./control/add-doctor.php">
                    <div class="form-group">
                        <label for="name">Imię: </label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="surname">Nazwisko: </label>
                        <input type="text" class="form-control" id="surname" name="surname">
                    </div>
                    <div class="form-group">
                        <label for="specialization">Specjalizacja: </label>
                        <input type="text" class="form-control" id="specialization" name="specialization">
                    </div>
                    <div class="form-group">
                        <label for="city">Miasto: </label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                    <div class="form-group">
                        <label for="salary">Pensja: </label>
                        <input type="text" class="form-control" id="salary" name="salary">
                    </div>
                    <button type="submit" class="btn btn-success" value="ok"> Dodaj lekarza</button>
                </form>
            </div>
        </div>
    </div>
</div>

