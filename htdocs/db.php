<?php
$servername = "localhost";
$username = "marcu";
$password = "QAZ123qaz";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


?>