<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Form with Database</title>
</head>
<body>

<h2>Simple PHP Form</h2>
<form method="POST" action="">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="phone">Phone Number:</label><br>
    <input type="text" id="phone" name="phone" required pattern="[0-9]{10}" title="Enter a 10-digit phone number"><br><br>
    
    <button type="submit" name="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Database connection details
    $servername = "localhost"; 
    $username = "root";        //database username
    $password = "";            //your database password
    $dbname = "userdata";      //name of your database

    // Form input
    $user = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Create database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert query
    $sql = "INSERT INTO users (username, email, phone) VALUES ('$user', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Record added successfully!</h3>";
    } else {
        echo "<h3>Error: " . $sql . "<br>" . $conn->error . "</h3>";
    }

    // Close connection
    $conn->close();
}
?>

</body>
</html>
