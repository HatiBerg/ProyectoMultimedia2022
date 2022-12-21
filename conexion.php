<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'gamecenter';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
    die('Conected failed:' . $e->getMessage());
}

$conexion = mysqli_connect($server, $username, $password, $database);




