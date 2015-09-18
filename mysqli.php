<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Create connection
$dbCon = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbCon->connect_error) {
    die("Connection failed: " . $dbCon->connect_error);
} 


?>