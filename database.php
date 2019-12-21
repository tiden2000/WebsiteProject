<?php
$servername = "mysql-db.cziogzsedwpa.us-east-1.rds.amazonaws.com";
$username = "tiden2000";
$password = "chienbot123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn, "shopsdb") or die(mysqli_error($conn));

$sql = "SELECT shops FROM shopstb";

$result = mysqli_query($conn, $sql)or die("Error". mysqli_error($conn));
?>