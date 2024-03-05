<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Registration</title>
<link rel="stylesheet" href="styles.css">
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    display: grid;
    gap: 10px;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="password"],
input[type="submit"],
select {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

</style>
</head>
<body>
<div class="container">
    <h2>Staff Registration</h2>
    <form action="process_staff.php" method="POST">
        <label for="staff_number">Staff Number:</label>
        <input type="text" id="staff_number" name="staff_number" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="registration_date">Registration Date:</label>
        <input type="text" id="registration_date" name="registration_date" readonly value="<?php echo date('Y-m-d H:i:s'); ?>">

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select>

        <label for="branch">Branch:</label>
        <input type="text" id="branch" name="branch" required>

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="creation_date">Date and Time of Creation:</label>
        <input type="text" id="creation_date" name="creation_date" readonly value="<?php echo date('Y-m-d H:i:s'); ?>">

        <input type="submit" value="Register">
    </form>
</div>
</body>
</html>
