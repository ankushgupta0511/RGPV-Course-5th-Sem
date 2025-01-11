<?php
$conn = new mysqli("localhost","root","","sistec");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// SQL query to show databases
$sql = "SHOW DATABASES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Databases on the server:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row['Database'] . "<br>";
    }
} 
else 
{
    echo "No databases found.";
}
// Close the connection
$conn->close();
?>