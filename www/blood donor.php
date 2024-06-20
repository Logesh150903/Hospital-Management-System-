<html>
<head>
    <title>Blood Donor Management</title>
</head>
<body>
    <h1>Add Blood Donor</h1>
    <form action="add_donor.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        
        <label for="blood_type">Blood Type:</label>
        <input type="text" name="blood_type" required><br><br>
        
        <label for="contact">Contact:</label>
        <input type="text" name="contact" required><br><br>
        
        <input type="submit" value="Add Donor">
    </form>
</body>
</html>

