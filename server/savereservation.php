<?php

include("connexion.php");

$nom = $_POST['nom'];
$check_in =$_POST['check_in'];
$check_out = $_POST['check_out'];
$town = $_POST['town'];
$telephone = $_POST['telephone'];
$gender = $_POST['gender'];
$type_of_room =$_POST['type_of_room'];
$number_of_person =$_POST['number_of_person'];
$sql = $pdo->prepare("INSERT INTO reservation(nom,check_in,check_out,town,telephone,gender,type_of_room,number_of_person)VALUES(?,?,?,?,?,?,?,?)");
$params = array($nom, $check_in,$check_out,$town,$telephone,$gender,$type_of_room,$number_of_person);
$sql->execute($params);
header("location:/src/pages/listehotel.php");
