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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $date = $_POST["date"];
  $time = $_POST["time"];

  // Insert appointment data into database
  $sql = "INSERT INTO appointments ( patient_name, patient_email, appointment_date, appointment_time)
          VALUES ('$name', '$email', '$date', '$time')";

  if ($conn->query($sql) === TRUE) {
    header("Location: Patientdashboard.html");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close database connection
$conn->close();
?>
