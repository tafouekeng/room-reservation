<?php

include('connexion.php');

$id= $_POST['id'];
$nom = $_POST['nom'];
$check_in =$_POST['check_in'];
$check_out = $_POST['check_out'];
$town = $_POST['town'];
// $telephone = $_POST['telephone'];
// $email = $_POST['email'];
// $gender = $_POST['gender'];

$sql =$pdo->prepare("UPDATE reservation SET nom=?, check_in=?, check_out=?, town=? WHERE id=? ");
$params =array($nom,$check_in,$check_out,$town,$id);
$sql->execute($params);
header("location:/src/pages/listehotel.php");