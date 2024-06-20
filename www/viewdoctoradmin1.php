<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patients</title>
    <style>
        body {background-image: url('./images/back.png'); 
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
        font-family: Arial, sans-serif;
        }
        th,td{
            text-align: left;
            padding: 8px;
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
    <div class="container">
        <h2>Doctor Information</h2>
        <table>
            <tr>
                <th>Patient ID</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Department</th>
                <th>Date of Join</th>
            </tr>
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hospital";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch data from database
            $sql = "SELECT * FROM doctor";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["Id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["Dob"]."</td>";
                    echo "<td>".$row["Email"]."</td>";
                    echo "<td>".$row["Mobile"]."</td>";
                    echo "<td>".$row["Gender"]."</td>";
                    echo "<td>".$row["Address"]."</td>";
                    echo "<td>".$row["Department"]."</td>";
                    echo "<td>".$row["doj"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No patients found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
    <a href="Patientdashboard.html" class="btn">back</a>
</body>
</html>
