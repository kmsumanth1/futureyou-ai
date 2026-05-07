<?php

$host = $_ENV['MYSQLHOST'];
$dbname = $_ENV['MYSQLDATABASE'];
$user = $_ENV['MYSQLUSER'];
$password = $_ENV['MYSQLPASSWORD'];

try {

    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $user,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

    die("Connection failed: " . $e->getMessage());

}

?>