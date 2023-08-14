<?php
$host = 'localhost';
$username = 'root';
$password = 'Shadow$2019';
$database = 'user_registration';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
