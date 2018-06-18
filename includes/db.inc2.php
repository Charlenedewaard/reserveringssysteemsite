<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "reservering1";

$conn1 = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn1->connect_error) {
    // Als er geen verbinding tot stand gebracht kan worden, wordt het verwijder programma afgesloten.
    die("Connection failed: " . $conn1->connect_error);
}