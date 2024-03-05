<?php
// Process form data
$registration_number = $_POST["registration_number"];
$id_number = $_POST["id_number"];
$membership_number = $_POST["membership_number"];
$domicile_branch = $_POST["domicile_branch"];
$registration_staff_number = $_POST["registration_staff_number"];
$registration_date = date("Y-m-d H:i:s"); // Current date and time

// File upload paths
$photo = ""; // Path to be filled after file upload
$id_front_Photo = ""; // Path to be filled after file upload
$id_back_Photo = ""; // Path to be filled after file upload
//$fingerprintsPath = ""; // Path to be filled after file upload

// Save to database
// Assuming $pdo is your PDO object for database connection
$con = new mysqli('localhost', 'root', '','biodata');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else{


    $stmt = $con->prepare("INSERT INTO `members` (registration_number, id_number, membership_number, domicile_branch, registration_staff_number, registration_date, photo, id_front_photo, id_back_photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiisissss", $registration_number, $id_number, $membership_number, $domicile_branch, $registration_staff_number, $registration_date, $photo, $id_front_Photo, $id_back_Photo);

    $stmt->execute();
    echo "registration successful";
    $stmt->close();
    $con->close();
}
?>