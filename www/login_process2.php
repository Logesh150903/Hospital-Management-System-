<?php
// Database connection details
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["email"];
    $password = $_POST["password"];

}
// Retrieve user inputs

$username = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


$sql = "SELECT * FROM user2  WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful! Welcome $username.";
    // Add further logic or redirection based on the user role
    header("Location: doctordashboard.html");
} else {
    echo "Invalid username or password ";
}

$conn->close();
?>
