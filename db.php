<?php
$host = "localhost";
$username = "root"; // Sesuaikan dengan username MySQL
$password = ""; // Sesuaikan dengan password MySQL
$dbname = "katalog_mobil";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
