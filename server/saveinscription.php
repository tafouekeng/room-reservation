<?php

include("connexion.php");

$nom = $_POST['nom'];
$prenom =$_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$sql = $pdo->prepare("INSERT INTO inscription(nom,prenom,telephone,email)VALUES(?,?,?,?)");
$params = array($nom, $prenom,$telephone,$email);
$sql->execute($params);
header("location:/src/components/home");
