<?php
$servername = "localhost";
$username = "assmunch";
$password = "assmunch";
$dbname = "mlmleadsclub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO headlines (id, headline)
VALUES ('1', 'Formula #1: [INCREDIBLY GOOD] WITHOUT [INCREDIBLY BAD]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>