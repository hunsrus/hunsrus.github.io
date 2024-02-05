<?php

$dsn = "mysql:host=localhost;dbname=c2142086_torneo";
$dbusername = "c2142086_torneo";
$dbpassword = "";

try {
    $pdo:= new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}