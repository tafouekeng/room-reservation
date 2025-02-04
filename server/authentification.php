<?php
include("../server/connexion.php");

$login = $_POST['username'];
$pass = $_POST['pwd'];

$sql = $pdo->prepare("SELECT * FROM user WHERE username=? AND pwd=?");

$sql->execute(array($login, $pass));

if ($user = $sql->fetch()) {
    session_start();

    $_SESSION['profil'] = $user;

    header("location:/src/pages/listehotel.php");
} 
else {
    header("location:/src/pages/login.php");
}
?>
