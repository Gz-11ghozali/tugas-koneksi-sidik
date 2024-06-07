<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts_312310763"; 

$koneksi = new mysqli($servername, $username, $password, $dbname);

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>
