<?php
// conection file to connect web portal to database 

$servername = "localhost"; // your host
$username1 = "root";// database username
$password = "amaechi123"; // database password
$database="contacts"; // database name

// Create connection
$conn = new mysqli($servername, $username1, $password, $database);

// Check connection or produce error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>