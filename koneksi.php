<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "uas";

// Create connection
$conn = new mysqli ($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
    // Proceed with your database operations here
}
?>