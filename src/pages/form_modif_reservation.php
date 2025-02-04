<?php
include('../../server/connexion.php');
$id = $_GET['id'];
$sql = $pdo->prepare("SELECT * FROM reservation WHERE id=?");
$sql->execute(array($id));
$reservation = $sql->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE DE RESERVATION</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">

</head>

<body>
    <div class="container space col-md-6">
        <div class="card">
            <div class="card-header bg-secondary">
                <h2>MODIFICATION DE RESERVATION</h2>
            </div>
            <div class="card-body">
                <form action="/server/updatereservation.php" method="POST">
                    <input type="hidden" name="id" class="form-control" value="<?php echo ($reservation['id']); ?>">
                    <div class="form-group">
                        <label for="" class="label-control">NOM :</label>
                        <input type="text" name="nom" class="form-control" value="<?php echo ($reservation['nom']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">check_in:</label>
                        <input type="date" name="check_in" class="form-control" value="<?php echo ($reservation['check_in']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">check_out:</label>
                        <input type="date" name="check_out" class="form-control" value="<?php echo ($reservation['check_out']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">town:</label>
                        <input type="text" name="town" class="form-control" value="<?php echo ($reservation['town']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">type_of_room:</label>
                        <input type="text" name="type_of_room" class="form-control" value="<?php echo ($reservation['type_of_room']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">number_of_person:</label>
                        <input type="number" name="number_of_person" class="form-control" value="<?php echo ($reservation['number_of_person']); ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>