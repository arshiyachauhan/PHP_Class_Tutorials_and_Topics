<!-- Create a event registration form in php with validation applied using php
 required fields: Name, Contact, EmailAddress, -->
 <html>
<head>
    <title>Event Registration Form</title>
</head>
<body>
<?php
$name = $email = $contact = $eventDate = $attendees = $comments = "";
$nameErr = $emailErr = $contactErr = $dateErr = $attendeesErr = $commentsErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate full name
    if (empty($_POST['name']) || !preg_match("/^[a-zA-Z ]{3,}$/", $_POST['name'])) {
        $nameErr = "Valid name is required.";
    } else {
        $name = $_POST['name'];
    }

    // Validate email address
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "A valid email address is required.";
    } else {
        $email = $_POST['email'];
    }

    // Validate contact number
    if (empty($_POST['contact']) || !preg_match("/^[0-9]{10}$/", $_POST['contact'])) {
        $contactErr = "Valid contact number (10 digits) is required.";
    } else {
        $contact = $_POST['contact'];
    }

    // Validate event date
    if (empty($_POST['eventDate'])) {
        $dateErr = "Event date is required.";
    } else {
        $eventDate = $_POST['eventDate'];
    }

    // Validate number of attendees
    if (empty($_POST['attendees']) || !is_numeric($_POST['attendees']) || $_POST['attendees'] < 1) {
        $attendeesErr = "A valid number of attendees is required.";
    } else {
        $attendees = $_POST['attendees'];
    }

    // Validate comments (optional)
    if (!empty($_POST['comments'])) {
        $comments = $_POST['comments'];
    }
}
?>

<h2>Event Registration Form</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color: red;"><?php echo $nameErr; ?></span><br><br>

    Email Address: <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color: red;"><?php echo $emailErr; ?></span><br><br>

    Contact Number: <input type="text" name="contact" value="<?php echo $contact; ?>">
    <span style="color: red;"><?php echo $contactErr; ?></span><br><br>

    Event Date: <input type="date" name="eventDate" value="<?php echo $eventDate; ?>">
    <span style="color: red;"><?php echo $dateErr; ?></span><br><br>

    Number of Attendees: <input type="text" name="attendees" value="<?php echo $attendees; ?>">
    <span style="color: red;"><?php echo $attendeesErr; ?></span><br><br>

    Comments: <textarea name="comments"><?php echo $comments; ?></textarea><br><br>

    <input type="submit" value="Submit">
</form>

<?php
// Display the submitted data if no errors
if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr && !$contactErr && !$dateErr && !$attendeesErr) {
    echo "<h3>Registration Successful!</h3>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Contact: $contact</p>";
    echo "<p>Event Date: $eventDate</p>";
    echo "<p>Attendees: $attendees</p>";
    echo "<p>Comments: $comments</p>";
}
?>
</body>
</html>
