<?php
include 'config.php';

//connection to database
$user = 'user';
$pass = 'password';
try {
    $db = new PDO('mysql:host=mysql_server-cbi;dbname=database;charset=utf8',$user,$pass);
}
catch (PDOException $e) {
    print 'Erreur : ' .$e->getMessage() . "<br/>";
    die;
}
?>