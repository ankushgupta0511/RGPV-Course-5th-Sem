<?php
$conn = new mysqli("localhost","root","","sistec");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$tableName = "table2"; 
$sql = "DROP TABLE IF EXISTS $tableName";

if ($conn->query($sql) === TRUE) {
    echo "Table '$tableName deleted successfully";
  } else {
    echo "Error in deleting table: " . $conn->error;
  }
$conn->close();
 ?>