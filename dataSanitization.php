<?php
$errors = [];
$success = "";

// Function to sanitize inputs
function sanitize_input($data) {
    return htmlspecialchars(trim($data));  // Remove unnecessary spaces and escape special characters
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $fullName = sanitize_input($_POST['full_name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $contactNumber = sanitize_input($_POST['contact_number'] ?? '');
    $eventDate = sanitize_input($_POST['event_date'] ?? '');
    $attendees = sanitize_input($_POST['attendees'] ?? '');
    $comments = sanitize_input($_POST['comments'] ?? '');

    // Validation
    if (empty($fullName)) {
        $errors['full_name'] = "Full name is required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "A valid email is required.";
    }

    if (empty($contactNumber)) {
        $errors['contact_number'] = "Contact number is required.";
    }

    $currentDate = date("Y-m-d");
    if (empty($eventDate)) {
        $errors['event_date'] = "Event date is required.";
    } elseif ($eventDate <= $currentDate) {
        $errors['event_date'] = "Event date must be greater than today's date.";
    }

    if (empty($attendees)) {
        $errors['attendees'] = "Number of attendees is required.";
    } elseif (!filter_var($attendees, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]])) {
        $errors['attendees'] = "Number of attendees must be a positive number.";
    }

    if (!empty($comments) && strlen($comments) > 200) {
        $errors['comments'] = "Comments should not exceed 200 characters.";
    }

    if (empty($errors)) {
        $success = "Registration successful!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <style>
        .required {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Event Registration</h2>
    <?php if ($success): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="full_name">Full Name <span class="required">*</span></label><br>
        <input type="text" id="full_name" name="full_name" value="<?php echo $_POST['full_name'] ?? ''; ?>">
        <span class="required"><?php echo $errors['full_name'] ?? ''; ?></span><br><br>

        <label for="email">Email <span class="required">*</span></label><br>
        <input type="email" id="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>">
        <span class="required"><?php echo $errors['email'] ?? ''; ?></span><br><br>

        <label for="contact_number">Contact Number <span class="required">*</span></label><br>
        <input type="text" id="contact_number" name="contact_number" value="<?php echo $_POST['contact_number'] ?? ''; ?>">
        <span class="required"><?php echo $errors['contact_number'] ?? ''; ?></span><br><br>

        <label for="event_date">Event Date <span class="required">*</span></label><br>
        <input type="date" id="event_date" name="event_date" value="<?php echo $_POST['event_date'] ?? ''; ?>">
        <span class="required"><?php echo $errors['event_date'] ?? ''; ?></span><br><br>

        <label for="attendees">Number of Attendees <span class="required">*</span></label><br>
        <input type="number" id="attendees" name="attendees" value="<?php echo $_POST['attendees'] ?? ''; ?>">
        <span class="required"><?php echo $errors['attendees'] ?? ''; ?></span><br><br>

        <label for="comments">Comments</label><br>
        <textarea id="comments" name="comments"><?php echo $_POST['comments'] ?? ''; ?></textarea>
        <span class="required"><?php echo $errors['comments'] ?? ''; ?></span><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
