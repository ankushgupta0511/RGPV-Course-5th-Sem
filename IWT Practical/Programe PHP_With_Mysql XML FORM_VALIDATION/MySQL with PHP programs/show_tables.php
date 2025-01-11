<?php
$dbname = 'sistec';
$conn = new mysqli("localhost","root","","sistec");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// SQL query to show databases
$sql = "show tables";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Tables in the database '$dbname':<br>";
    while ($row = $result->fetch_array()) {
        echo $row[0] . "<br>";
    }
} else {
    echo "No tables found in the database.";
}
// Close the connection
$conn->close();
?>