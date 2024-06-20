<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription Form</title>
    <style>body{
        margin: 0;
        padding: 0;
        font-family:  'Poppins', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background-image: url('./images/pantdoc.png'); 
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
    }
    header{
        position: fixed;
        top: 0;
        width: 50%;
        padding: 20px 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 99;
    }
    img{
        width: 30%;
        display: block;
        background: transparent;
        margin-left: 2rem;
        backdrop-filter: blur(10px);
        display: flex;
    }
    .btnLogin-popup{
        width: 130px;
        height: 50px;
        background: transparent;
        border: 2px solid rgba(255,255,255,.5);
        outline: none;
        border-radius: 6px;
        backdrop-filter: blur(20px);
        box-shadow: 0 0 30px rgba(0,0,0,.5);
        cursor: pointer;
        font-size: 1.1em;
        color: #af1616;
        margin-left: 30px;
        transition: .5s;
    }
    .btnLogin-popup:hover{
        background: #af1616;
        color: #fff;
    }
    .container {
    width: auto;
margin: auto;
padding: 20px;
border: 1px solid #ccc;
border-radius: 5px;
}

label, input, select, textarea {
display: block;
margin-bottom: 10px;
}

button {
padding: 10px 20px;
background-color: #007bff;
color: #fff;
border: none;
border-radius: 5px;
cursor: pointer;
}

button:hover {
background-color: #0056b3;
}

    </style>
</head>
<body>
    <header>
        <img src = "images/logo.png" alt = "site logo">
        <a href = "adminPrescriptionListdashboard.html"><button class="btnLogin-popup">Back</button></a>
        <nav class="navigtion">
            <a href = "logout.html"><button class="btnLogin-popup">Logout</button></a>
        </nav>
    </header>
    <div class="container">
        <h2>Prescription View</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Doctor Name</th>
                <th>Prescription</th>
                <th>Prescribed Date</th>
            </tr>
            <?php include 'display_prescriptions.php'; ?>
        </table>
    </div>
</body>
</html>
