<?php
$servername = "localhost";
$username = "root";
$password = "chienbot123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

mysqli_select_db($conn, "shopsdb") or die(mysqli_error($conn). mysqli_error($conn));

$sql = "SELECT Shop FROM shops";

$result = mysqli_query($conn, $sql)or die("Error". mysqli_error($conn));
?>