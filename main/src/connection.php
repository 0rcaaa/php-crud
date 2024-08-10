<?php
$server_name = 'localhost';
$username = 'root';
$password = '';
$database = "demo";

$connection = mysqli_connect($server_name, $username, $password, $database);

if ($connection->connect_error) {
    die("gagal". $connection->connect_error);
}
