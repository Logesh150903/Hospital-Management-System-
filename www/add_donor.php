<?php
// Database connection setup (replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_management";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$blood_type = $_POST['blood_type'];
$contact = $_POST['contact'];

// Insert data into the database
$sql = "INSERT INTO blood_donors (name, blood_type, contact) VALUES ('$name', '$blood_type', '$contact')";

if ($conn->query($sql) === TRUE) {
    echo "Donor added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT * FROM blood_donors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Blood type</th><th>contact</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["blood type"]."</td>";
        echo "<td>".$row["contact"]."</td>";
        
         }
    
    echo "</table>";
}
$conn->close();
?>
