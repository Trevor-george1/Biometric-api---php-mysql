<?php
// Process form data
$staff_number = $_POST["staff_number"];
$username = $_POST["username"];
$pass_word = $_POST["pass_word"];
$registration_date = $_POST["registration_date"];
$status = $_POST["status1"];
$branch = $_POST["branch"];
$title = $_POST["title"];
$creation_date = $_POST["creation_date"];
// ave to database
// Assuming $pdo is your PDO object for database connection
$con = new mysqli('localhost', 'root', '','biodata');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else{


    $stmt = $con->prepare("INSERT INTO `staff` (staff_number, username, pass_word, registration_date, status1, branch, title, creation_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ississss", $staff_number, $username, $pass_word, $registration_date, $status, $branch, $title, $creation_date);

    $stmt->execute();
    echo "registration successful";
    $stmt->close();
    $con->close();
}
?>