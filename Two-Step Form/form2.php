<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone" required><br><br>
        <label for="address">Address:</label>
        <textarea name="address" id="address" required></textarea><br><br>
        <input type="hidden" name="name" value="<?php echo $_REQUEST['name']; ?>">
        <input type="hidden" name="email" value="<?php echo $_REQUEST['email']; ?>">

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        echo "<h3>Your Details!</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Phone: " . $phone . "<br>";
        echo "Address: " . $address . "<br>";
    }
    ?>
</body>
</html>
