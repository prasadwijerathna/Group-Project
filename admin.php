<?php
// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "mariadb";
$dbname = "pet";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch items from the database
$sql1 = "SELECT * FROM items";
$result = $conn->query($sql1);

$sql2 = "SELECT * FROM customer";
$resultuser = $conn->query($sql2);


