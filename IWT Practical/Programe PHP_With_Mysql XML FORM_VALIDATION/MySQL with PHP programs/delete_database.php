<?php
$conn = new mysqli("localhost","root","","sistec");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// SQL query to delete a database
$dbname = "test"; // Name of the database to delete
$sql = "DROP DATABASE $dbname";
// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Database '$dbname' deleted successfully";
} else {
    echo "Error deleting database: " . $conn->error;
}
// Close the connection
$conn->close();
?>