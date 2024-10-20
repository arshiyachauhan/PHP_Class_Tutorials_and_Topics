<!-- create a form that has autofill for cookie functionality and has set and delete buttons -->
<?php
$cookie_name = "username";
$username = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    setcookie($cookie_name, $username, time() + 100, "/");
} elseif (isset($_COOKIE[$cookie_name])) {
    
    $username = $_COOKIE[$cookie_name];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Input Form</title>
</head>
<body>

<h2>Enter Username</h2>

<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>">
    <button type="submit">Submit</button>
</form>



</body>
</html>
