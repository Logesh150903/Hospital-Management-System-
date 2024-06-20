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

$username = isset($_POST['username']) ? $_POST['username'] : '';
$newPassword = isset($_POST['new-password']) ? $_POST['new-password'] : '';
$reEnteredPassword = isset($_POST['re-enter-password']) ? $_POST['re-enter-password'] : '';

// Validate the inputs (you may have more complex validation logic)
if (empty($username) || empty($newPassword) || empty($reEnteredPassword)) {
    echo "All fields are required.";
} elseif ($newPassword !== $reEnteredPassword) {
    echo "Passwords do not match.";
} else {
    // Update the user's password in the database
    $sql = "UPDATE user1 SET password='$newPassword' WHERE username='$username'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully.";
        echo"login with new password in login page";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
</body>
</html>
