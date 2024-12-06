<!-- Dark Mode Preference -->
<!-- Scenario: Create a PHP Script that allows users to toggle between light and dark mode -->
<!-- Save the user's preference in a cookie and apply the theme accordingly -->
<!-- Exercise : Create button for switching between dark mode and light mode -->
<!-- Store the user's preference in a cookie, Apply the theme based on the stored cookie when the user returns -->


<?php
if (isset($_POST['theme'])) {
    if ($_POST['theme'] == 'dark') {
        setcookie('theme', 'dark', time() + (86400 * 30), "/"); // Set cookie for dark theme
    } else {
        setcookie('theme', 'light', time() + (86400 * 30), "/"); // Set cookie for light theme
    }
    header("Refresh:0");
    exit;
}

// Check if the theme cookie is set and apply the theme
if (isset($_COOKIE['theme'])) {
    if ($_COOKIE['theme'] == 'dark') {
        echo '<style>body { background-color: #333; color: #fff; }</style>';
    } else {
        echo '<style>body { background-color: #fff; color: #333; }</style>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Theme Preference</title>
</head>
<body>
    <h1>Theme Preference</h1>
    <p>Current Theme: <?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'Light'; ?> Mode </p>
    <form method="post">
        <button type="submit" name="theme" value="light">Light Mode</button>
        <button type="submit" name="theme" value="dark">Dark Mode</button>
    </form>
</body>
</html>
