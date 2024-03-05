<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Here, you would typically validate the username and password against your database
    // For simplicity, let's assume valid credentials are "admin" and "password123"
    if ($username === "admin" && $password === "123") {
        // Authentication successful
        // Redirect to the page where staff can capture information
        header("Location: staff.php");
        exit;
    } else {
        // Authentication failed
        echo "Invalid username or password. Please try again.";
    }
}
?>


