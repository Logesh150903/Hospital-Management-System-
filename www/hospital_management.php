<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add a new patient
if (isset($_POST['add_patient'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $admission_date = $_POST['admission_date'];
    $discharge_date = $_POST['discharge_date'];
    $diagnosis = $_POST['diagnosis'];

    $sql = "INSERT INTO patients (first_name, last_name, dob, gender, admission_date, discharge_date, diagnosis)
            VALUES ('$first_name', '$last_name', '$dob', '$gender', '$admission_date', '$discharge_date', '$diagnosis')";

    if ($conn->query($sql) === TRUE) {
        echo "Patient added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Display the list of patients
$sql = "SELECT * FROM patients";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>DOB</th><th>Gender</th><th>Admission Date</th><th>Discharge Date</th><th>Diagnosis</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["first_name"]." ".$row["last_name"]."</td>";
        echo "<td>".$row["dob"]."</td>";
        echo "<td>".$row["gender"]."</td>";
        echo "<td>".$row["admission_date"]."</td>";
        echo "<td>".$row["discharge_date"]."</td>";
        echo "<td>".$row["diagnosis"]."</td>";
        echo "</tr>";
         }
    
    echo "</table>";
} else {
    echo "No patients found.";
}

$conn->close();
?>



