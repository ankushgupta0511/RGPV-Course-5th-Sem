<?php
/*$servername = "localhost";
$username = "root";
$password = "";*/

// Create connection
$conn = new mysqli("localhost","root","");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE database3";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} 
else 
{
  echo "Error creating database: " . $conn->error;
}
$conn->close();
?>