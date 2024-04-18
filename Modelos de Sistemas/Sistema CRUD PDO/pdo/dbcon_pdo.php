<?php

$host = "localhost";
$dbname = "pdo";
$user = "root";
$pass = "";


$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

if ($pdo){
    echo "oi";
}

?>