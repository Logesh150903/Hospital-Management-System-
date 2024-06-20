<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription Form</title>
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
            max-width: 400px;
    margin: 50px auto;
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
        <h2>Prescription Form</h2>
        <form action="process_prescription.php" method="post">
<?php
// Database connection
$servername = "localhost";
$username = "root"; // Enter your MySQL username
$password = ""; // Enter your MySQL password
$dbname = "hospital"; // Enter your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$patient_id = $_POST['patient_id'];

$symptoms = $_POST['symptoms'];
$diagnosis = $_POST['diagnosis'];

// Insert data into database
$sql = "UPDATE patients SET symptoms=$symptoms, diagnosis=$diagnosis where patient_id=$patient_id";

if ($conn->query($sql) === TRUE) {
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
            
            echo '<label for="doctor">Doctor:</label>';
            echo '<input type="text" id="doctor"  name="doctor" value="' . $row['doctor_name'] . '" required><br><br>';
            
            
            echo '<label for="Prescription">Prescription :</label>';
            echo '<textarea id="Prescription" name="Prescription" required>' . $row['prescription_text'] . '</textarea><br><br>';
            echo'Note in box with double quotation';
        }
    } else {
        echo "0 results";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<button type="submit">Submit</button>
</form>
</div>
</body>
</html>