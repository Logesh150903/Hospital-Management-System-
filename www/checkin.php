<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details Form</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family:  'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: url('./images/pantdoc.png'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }
        header{
            position: fixed;
            top: 0;
            width: 50%;
            padding: 20px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 99;
        }
        img{
            width: 30%;
            display: block;
            background: transparent;
            margin-left: 2rem;
            backdrop-filter: blur(10px);
            display: flex;
        }
        .btnLogin-popup{
            width: 130px;
            height: 50px;
            background: transparent;
            border: 2px solid rgba(255,255,255,.5);
            outline: none;
            border-radius: 6px;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 30px rgba(0,0,0,.5);
            cursor: pointer;
            font-size: 1.1em;
            color: #af1616;
            margin-left: 30px;
            transition: .5s;
        }
        .btnLogin-popup:hover{
            background: #af1616;
            color: #fff;
        }
        .container {
            width: auto;
    margin:  auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

h2 {
    text-align: center;
}



label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="number"],
select,
textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
<header>
        <img src = "images/logo.png" alt = "site logo">
        <a href = "Patientdoctor.html"><button class="btnLogin-popup">Back</button></a>
        <nav class="navigtion">
            <a href = "logout.html"><button class="btnLogin-popup">Logout</button></a>
        </nav>
    </header>
    <div class="container">
    <h2>Patient Details Form</h2>
    <form action="process1.php" method="post">
<?php
// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve patient ID from the form
$patient_id = $_POST['patient_id'];

// Check if the patient exists in the database
$sql = "SELECT * FROM patients WHERE patient_id = $patient_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Patient found, update check-in status
    $sql = "SELECT * FROM patients WHERE patient_id = $patient_id"; // Assuming you want to fetch data for a specific patient (change '1' to the desired patient ID)

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<label for="patient id">patient id:</label>';
                echo '<input type="text" id="patient id" name="patient id" value="' . $row['patient_id'] . '" required><br><br>';
                echo '<label for="name">Name:</label>';
                echo '<input type="text" id="name" name="name" value="' . $row['patient_name'] . '" required><br><br>';
                
                echo '<label for="age">age:</label>';
                echo '<input type="text" id="age" name="age" value="' . $row['age'] . '" required><br><br>';
                
                echo '<label for="gender">Gender:</label>';
                echo '<input type="text" id="gender"  name="gender" value="' . $row['gender'] . '" required><br><br>';
                
                
                echo '<label for="symptoms">symptoms:</label>';
                echo '<textarea id="symptoms" name="symptoms" required>' . $row['Symptoms'] . '</textarea><br><br>';
                echo '<label for="diagnosis">diagnosis:</label>';
                echo '<textarea id="diagnosis" name="diagnosis" required>' . $row['Diagnosis'] . '</textarea><br><br>';
                echo'Note in box with double quotation';
            }
        } else {
            echo "0 results";
        }
} else {
    header("Location:newpatient.html");
}

$conn->close();
?>
 <button type="submit">Submit</button>
 </form>
    </div>
</body>
</html>