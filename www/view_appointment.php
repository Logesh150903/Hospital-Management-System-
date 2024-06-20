<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Appointments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
        a{
            text-decoration: none;
        }
        .btn{
            background: #f05462;
            color: white;
            padding: 5px 10px;
            text-align: center;
        }
        .btn:hover{
            color: #f05462;
            background: white;
            padding: 3px 8px;
            border: 2px solid #f05462;
        }
    </style>
</head>
<body>
    <h2>Your Appointments</h2>

    <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "hospital";
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch appointments for the patient
    $patient_email = 'aaaa@gmail.com'; // Change this to the patient's email, you can retrieve it from session or cookie
    $sql = "SELECT * FROM appointments";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Appointment Date</th><th>Appointment Time</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["appointment_date"]."</td><td>".$row["appointment_time"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No appointments found.";
    }

    // Close connection
    $conn->close();
    ?>
    <a href="doctordashboard.html" class="btn">back</a>
</body>
</html>
