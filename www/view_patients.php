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
        color: #fff;
    }
    button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      background-color: #4285f4;
      color: #fff;
      border: none;
      border-radius: 5px;
      justify-content: space-around;
    }

button:hover {
      background-color: #357ae8;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Patient Information</h2>
        <table>
            <tr>
                <th>Patient ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Symptoms</th>
                <th>Diagnosis</th>
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
            $sql = "SELECT * FROM patients";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["patient_id"]."</td>";
                    echo "<td>".$row["patient_name"]."</td>";
                    echo "<td>".$row["age"]."</td>";
                    echo "<td>".$row["gender"]."</td>";
                    echo "<td>".$row["Symptoms"]."</td>";
                    echo "<td>".$row["Diagnosis"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No patients found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
        <button><a href="admindPatientashboard.html">Back</a></button>
    </div>
</body>
</html>
