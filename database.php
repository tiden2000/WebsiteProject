<?php
$host="localhost";
$port=3306;
$user="root";
$password="chienbot123";
$dbname="shopsdb";

$con = new mysqli($host, $user, $password, $dbname, $port)
	or die ('Could not connect to the database server' . mysqli_connect_error());


$sql = "SELECT Shop FROM shops";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "Shop: " . $row["Shop"]. "<br>";
     }
 } else {
     echo "0 results";
 }
 $conn->close();
?>