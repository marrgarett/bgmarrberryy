<?php
$servername = "localhost";
$username = "root";
$db_name = "db_bgmarrberryy";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 try {
        $db = new PDO("mysql:host={$servername};dbname={$db_name}", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        $e->getMessage();
    }

// echo "Connected successfully";

