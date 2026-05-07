<?php

$host = getenv('MYSQLHOST');
$dbname = getenv('MYSQLDATABASE');
$user = getenv('MYSQLUSER');
$password = getenv('MYSQLPASSWORD');

$conn = new PDO(
    "mysql:host=$host;dbname=$dbname",
    $user,
    $password
);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>