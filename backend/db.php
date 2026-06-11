<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fir_system";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>
