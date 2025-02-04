<?php
 $env = [
    'DB_HOST' => 'localhost',
    'DB_USER' => 'username',
    'DB_PASSWORD' => '',
    'DB_NAME' => "gestiond_hotel",
];
try {
    //code...
    $str='mysql:host='.$env['DB_HOST'].';dbname='.$env['DB_NAME'];
    $pdo = new PDO($str, 'root', '');
} catch (PDOException $e) {
    //throw $th;
    $msg = 'erreur PDO' . $e->getMessage();
    die($msg);
}
