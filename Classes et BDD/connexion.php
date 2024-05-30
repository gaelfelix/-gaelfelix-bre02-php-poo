<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "gaelfelix_pooj1";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "gaelfelix";
$password = "5a16f635a8837f52a7e3744f30344409";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

?>