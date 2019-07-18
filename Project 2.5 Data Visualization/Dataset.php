<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "xxxx";
$dbname = "project3_Data";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT date_date, revenue, inventory FROM LArevenue";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>date_date</th><th>revenue</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date_date"]. "</td><td>" . $row["revenue"]. " " . $row["inventory"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>