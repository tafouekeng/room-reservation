<?php

$id =$_GET['id'];
include("connexion.php");

$sql = $pdo->prepare("DELETE FROM reservation WHERE id=?");

$sql->execute(array($id));

header('location:/src/pages/listehotel.php');


