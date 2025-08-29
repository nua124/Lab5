<?php
$servername = "localhost";
$username = "phatcharaporn";
$password = "0879444150";
$db = "phatcharaporn";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>