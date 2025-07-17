<?php
date_default_timezone_set('Africa/Nairobi');
$servername = "localhost";
$username = "root";
$password = "alex";
$dbname = "sect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    // echo "Connected successfully to the database {$dbname}.";
}