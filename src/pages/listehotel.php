<?php
 include('..\..\server\security.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE DE RESERVATION</title>
    <?php
    include('../../server/connexion.php');
    $sql = $pdo->prepare("SELECT*FROM reservation");
    $sql->execute();
    if (isset($_GET['recherche']) and !empty($_GET['recherche'])) {
        $recherche = $_GET['recherche'];
        $sql = $pdo->prepare('SELECT * FROM reservation WHERE nom LIKE "%' . $recherche . '%"');
        $sql->execute();
    }
    ?>
     <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
 
</head>

<body>
    <?php include("../components/head/entete.php"); ?>
    <div class="container space">
        <div class="card">
            <section class="card-header spacerecherche">
                <div class="col-md-8">
                    <h3>LISTE DE RESERVATION</h3>
                </div>
                <div class="col-md-4">
                    <form action="#admin" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control" name="recherche">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">rechercher</button>
                        </div>
                    </form>
                </div>
            </section>
            <div class="card-header bg-secondary">
                <h2> LISTE DES RESERVATION </h2>
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <th>id</th>
                        <th>nom</th>
                        <th>check_in</th>
                        <th>check_out</th>
                        <th>town</th>
                        <th>telephone</th>
                        <th>gender</th>
                        <th>type_of_room</th>
                        <th>number_of_person</th>
                        <th colspan="2">option</th>

                    </thead>
                    <tbody>
                        <!-- <tbody> -->
                        <?php while ($reservation = $sql->fetch()) { ?>
                            <tr>
                                <td><?php echo ($reservation['id']); ?> </td>
                                <td><?php echo ($reservation['nom']); ?> </td>
                                <td><?php echo ($reservation['check_in']); ?> </td>
                                <td><?php echo ($reservation['check_out']); ?> </td>
                                <td><?php echo ($reservation['town']); ?> </td>
                                <td><?php echo ($reservation['telephone']); ?> </td>
                                <td><?php echo ($reservation['gender']); ?> </td>
                                <td><?php echo ($reservation['type_of_room']); ?> </td>
                                <td><?php echo ($reservation['number_of_person']); ?> </td>
                                <td><a href="form_modif_reservation.php?id=<?php echo ($reservation['id']); ?>" class="btn btn-success"><img src="/public/imgs/pencil-square.svg" alt="delete"></a></td>
                                <td><a href="/server/supreservation.php?id=<?php echo ($reservation['id']); ?>" class="btn btn-danger" onclick="return confirm('voulez-vous vraiment supprimer??')"><img src="/public/imgs/trash-fill.svg" alt="save"></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
</body>

</html>