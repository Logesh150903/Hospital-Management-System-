<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel = "stylesheet" href = "css/styles.css">
    <style>
        body{
        background-image: url('./images/background.png'); /* Replace 'background.jpg' with your image URL */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
        }
    </style>
</head>
<body>
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
}

        // Insert user data into the database (you may want to hash the password)
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
            
        } 
else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    

?>
</body>
</html>
