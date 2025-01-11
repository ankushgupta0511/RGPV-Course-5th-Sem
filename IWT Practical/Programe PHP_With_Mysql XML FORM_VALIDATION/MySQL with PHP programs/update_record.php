<?php
$conn = new mysqli("localhost","root","","sistec");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE table1 SET email='mohan@gmail.com' WHERE firstname = 'Mohan'";

if ($conn->query($sql) === TRUE) {
  echo "Table table1 updated successfully";
} else {
  echo "Error updating table: " . $conn->error;
}
$conn->close();
?>