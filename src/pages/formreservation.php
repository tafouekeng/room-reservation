<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE DE R</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<?php include("../components/head/entete1.php"); ?>

<body>
    <div class="container space col-md-6">
        <div class="card">
            <div class="card-header bg-secondary">
                <h2>RESERVE YOUR ROOM </h2>
            </div>
            <div class="card-body">
                <form action="/server/savereservation.php" method="POST">
                    <div class="form-group">
                        <label for="" class="label-control">NOM :</label>
                        <input type="text" name="nom" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">check_in :</label>
                        <input type="date" name="check_in" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">check_out:</label>
                        <input type="date" name="check_out" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">town:</label>
                        <input type="text" name="town" class="form-control">
</div>
<div class="form-group">
                        <label for="" class="label-control">telephone:</label>
                        <input type="number" name="telephone" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">gender:</label>
                        <input type="gender" name="gender" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">type_of_room:</label>
                        <input type="text" name="type_of_room" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">number_of_person:</label>
                        <input type="number" name="number_of_person" class="form-control">

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">ENREGISTRER </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>