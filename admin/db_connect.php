<?php
$servername = "localhost";
$username = "root";
$db_name = "db_bgmarrberryy";
$password = " ";

// Create connection
$conn = new mysqli($servername, $username, $db_name, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
