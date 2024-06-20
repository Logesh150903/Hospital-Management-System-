<?php
$host = "localhost";  // Change to your database host
$username = "root";  // Change to your database username
$password = "";  // Change to your database password
$database = "hospital_management";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to insert a new donor
function addDonor($name, $age, $gender, $bloodGroupID) {
    global $conn;
    $name = mysqli_real_escape_string($conn, $name);
    $sql = "INSERT INTO donors (full_name, age, gender, blood_group_id) VALUES ('$name', $age, '$gender', $bloodGroupID)";
    return $conn->query($sql);
}

// Function to retrieve donors
function getDonors() {
    global $conn;
    $sql = "SELECT donors.id, donors.full_name, donors.age, donors.gender, blood_groups.group_name
            FROM donors
            JOIN blood_groups ON donors.blood_group_id = blood_groups.id";
    $result = $conn->query($sql);
    $donors = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $donors[] = $row;
        }
    }
    return $donors;
}

// Example usage:
// Add a new donor
addDonor("John Doe", 30, "Male", 1);

// Get all donors
$donors = getDonors();
foreach ($donors as $donor) {
 echo "ID: " . $donor['id'] . ", Name: " . $donor['full_name'] . ", Age: " . $donor['age'] . ", Gender: " . $donor['gender'] . ", Blood Group: " . $donor['group_name'] . "<br>";
}

$conn->close();
?>


