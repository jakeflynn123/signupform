<?php
$servername = "141.0.165.182";
$username = "bestuser";
$password = "Ohr5o2_3";
$databasename = "bestdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 