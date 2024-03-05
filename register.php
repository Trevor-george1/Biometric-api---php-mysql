<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Member Registration Form</title>
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
input[type="file"],
input[type="submit"] {
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
    <h2>Member Registration Form</h2>
    <form action="process_form.php" method="POST" enctype="multipart/form-data">
        <label for="registration_number">Registration Number:</label>
        <input type="text" id="registration_number" name="registration_number" required>

        <label for="id_number">ID Number:</label>
        <input type="text" id="id_number" name="id_number" required>

        <label for="membership_number">Membership Number:</label>
        <input type="text" id="membership_number" name="membership_number" required>

        <label for="photo">Photo of the Member:</label>
        <input type="file" id="photo" name="photo" accept="image/*">

        <label for="id_front_photo">Front side photo of the ID:</label>
        <input type="file" id="id_front_photo" name="id_front_photo" accept="image/*">

        <label for="id_back_photo">Back side photo of the ID:</label>
        <input type="file" id="id_back_photo" name="id_back_photo" accept="image/*">

        <label for="domicile_branch">Domicile Branch:</label>
        <input type="text" id="domicile_branch" name="domicile_branch" required>

        <label for="registration_staff_number">Registration Staff Number:</label>
        <input type="text" id="registration_staff_number" name="registration_staff_number" required>

        <label for="registration_date">Registration Date:</label>
        <input type="text" id="registration_date" name="registration_date" readonly>

        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
