<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Payment</title>
    <style>
        body {background-image: url('./images/payment.png'); 
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
    </style>
</head>
<body>
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

// Retrieve recent payments
$sql = "SELECT * FROM payments ORDER BY payment_date DESC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Recent Payments</h2>";
    echo "<table><tr><th>Payment ID</th><th>Patient Name</th><th>Amount</th><th>Payment Date</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["payment_id"]."</td><td>".$row["patient_name"]."</td><td>".$row["amount"]."</td><td>".$row["payment_date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No payments recorded yet.";
}

// Close connection
$conn->close();
?>
</body>
</html>