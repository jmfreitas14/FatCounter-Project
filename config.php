<?php
session_start();

$dsn = "mysql:dbname=fatcounter;host=localhost";
$user = "root";
$pass = "";

global $pdo;
try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Falhou: " . $e->getMessage();
    exit;
}
