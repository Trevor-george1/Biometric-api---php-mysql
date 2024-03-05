<?php
// Step 1: Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "biodata";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Step 2: Fetch data from the database
$sql = "SELECT * FROM members";
$result = $con->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$con->close();

// Step 3: Pass the data to the HTML file
echo json_encode($data);
?>
