<?php
$conn = new mysqli("localhost","root","","sistec");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE table3 (
id INT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30),
email VARCHAR(50),
date date
)";

if ($conn->query($sql) === TRUE) {
  echo "Table table3 created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>