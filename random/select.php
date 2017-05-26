<?php
$random = (rand(1,19));

// echo "$random";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mlc_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// $sql = "SELECT id, headline FROM headlines";
$sql = "SELECT headline FROM headlines
		WHERE id = $random";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. " - Headline: " . $row["headline"]. "<br>";
        echo "<h1>" . $row["headline"] . "</h1>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>