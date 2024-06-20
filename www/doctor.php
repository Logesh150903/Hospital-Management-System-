<?php
// Check if the form is submitted
        // Connect to your database (replace database credentials)
        $servername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "hospital";

        $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email=$_POST["email"];
    $password = $_POST["password"];
    $name=$_POST["name"];
    $dob=$_POST["dob"];
    $doj=$_POST["doj"];
    $Mobile=$_POST["Mobile"];
    $Gender=$_POST["Gender"];
    $Address=$_POST["Address"];
    $dep=$_POST["dep"];
}

        // Insert user data into the database (you may want to hash the password)
        $sql = "INSERT INTO user2 (username, password) VALUES ('$username','$password')";

if ($conn->query($sql) === TRUE) {
            echo "Added Successful";
             
        } 
else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $sql1 = "INSERT INTO doctor (name, dob,email,Mobile,Gender,Address,Department,doj) VALUES ('$name','$dob','$email','$Mobile','$Gender','$Address','$dep','$doj')";
if ($conn->query($sql1) === TRUE) {
    header("Location: admindoctordashboard.html");
        } 
else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // Close the database connection
        $conn->close();
    

?>