<?php
// Establish connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_name = $_POST["patient_name"];
    $amount = $_POST["amount"];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO payments (patient_name, amount, payment_date) VALUES ('$patient_name', '$amount', NOW())");
   

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        header("Location: diaplaypayment.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Close connection
$conn->close();
?>
