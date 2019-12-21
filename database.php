<?php
$servername = "127.0.0.1";
$username = "root";
$password = "chienbot123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Shop FROM shops";
$result = mysqli_query($conn, $sql)or die("Error");

echo result;

echo "Connected successfully";
?>