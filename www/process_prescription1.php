<?php
// Connect to MySQL
$servername = "localhost";
$username = "root"; // Enter your MySQL username
$password = ""; // Enter your MySQL password
$dbname = "hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_id = $_POST['patient_id'];
   
    $prescription_text = $_POST["Prescription"];

    // Insert prescription data into the database
    $sql = "UPDATE patients SET prescription_text=$prescription_text where patient_id=$patient_id";

    if ($conn->query($sql) === TRUE) {
        header("Location:patientdoctor.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
