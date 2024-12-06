<?php
$errname = " ";
$erremail = " ";

if (isset($_POST["save"])) {
    // Validate name
    if (empty($_POST['name'])) {
        $errname = "Name is required.";
    } else {
        echo "The name is ", htmlspecialchars($_POST["name"]), "<br>";
    }

    // Validate email
    if (empty($_POST['email'])) {
        $erremail = "Email is required.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erremail = "Invalid email format.";
    } else {
        echo "The email is ", htmlspecialchars($_POST["email"]), "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- htmlspecialchars() used to protect data from attackers by replacing special characters -->
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        UserName:
        <input type="text" name="name">
        <!-- applying validation for required field -->
        <span style="color: red">*<?php echo $errname; ?></span>
        <br><br>
        Email:
        <input type="text" name="email">
        <!-- applying validation for required field -->
        <span style="color: red">*<?php echo $erremail; ?></span>
        <br><br>
        <input type="submit" name="save" value="Submit">
    </form>
</body>
</html>
