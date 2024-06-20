<?php
// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve prescriptions from the database
$sql = "SELECT * FROM patients";
$result = $conn->query($sql);

// Display prescriptions in a table
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["patient_id"] . "</td>";
        echo "<td>" . $row["patient_name"] . "</td>";
        echo "<td>" . $row["doctor_name"] . "</td>";
        echo "<td>" . $row["prescription_text"] . "</td>";
        echo "<td>" . $row["prescribed_date"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No prescriptions found</td></tr>";
}

$conn->close();
?>
