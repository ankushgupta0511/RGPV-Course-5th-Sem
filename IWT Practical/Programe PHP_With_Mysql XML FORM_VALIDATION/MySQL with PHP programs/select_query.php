<?php
$conn = new mysqli("localhost","root","","sistec");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// SQL query
$sql = "SELECT * FROM table1"; 
$result = $conn->query($sql);
//$sql = "SELECT * FROM table1 where firstname = 'ram'"; 
//$sql = "SELECT * FROM table1 where firstname like '%am'";
//$sql = "SELECT * FROM table1 where firstname like 'ra%'";
//$sql = "SELECT * FROM table1 where lastname like '_am%'";
//$sql = "SELECT * FROM table1 where firstname like '_he_%'"; 
//$sql = "SELECT firstname, email FROM table1 where firstname like '_he_%'"; 

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        print_r($row); // Print all columns for each row
        echo "<br>";
    }
} else {
    echo "No results found.";
}
// Close the connection
$conn->close();
?>