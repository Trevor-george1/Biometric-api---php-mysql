<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Display Data</title>
</head>
<body>
    <h1>Registration Report</h1>
    <table border='1' id='member-table'>
        <tr>
            <th>Registration Number</th>
            <th>ID Number</th>
            <th>Membership Number</th>
            <th>Domicile Branch</th>
            <th>Registration Staff Number</th>
            <th>Registration Date</th>
            <th>Photo</th>
        </tr>
    </table>

    <script>
        // Step 4: Fetch data from the PHP file using JavaScript
        fetch('registered_report.php')
        .then(response => response.json())
        .then(data => {
            let table = document.getElementById('member-table');
            data.forEach(member => {
                let row = table.insertRow();
                row.insertCell().textContent = member.registration_number;
                row.insertCell().textContent = member.id_number;
                row.insertCell().textContent = member.membership_number;
                row.insertCell().textContent = member.domicile_branch;
                row.insertCell().textContent = member.registration_staff_number;
                row.insertCell().textContent = member.registration_date;
                let photoCell = row.insertCell();
                let img = document.createElement('img');
                img.src = member.photo;
                img.alt = 'Photo';
                img.width = 100;
                photoCell.appendChild(img);
            });
        });
    </script>
</body>
</html>
