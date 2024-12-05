<!-- Create a review submit form . validate the char length to 20 , add css and dislay message on successful submission -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submit Your Review</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validateReview() {
            const review = document.getElementById("review").value;
            if (review.length < 20) {
                document.getElementById("error").innerText = "Review must be at least 20 characters long.";
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

<h1>Submit Your Review</h1>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="return validateReview()">
    <label for="review">Review:</label><br>
    <textarea id="review" name="review" placeholder="Write your review here" required></textarea><br>
    <span id="error" class="error"></span>
    <button type="submit" name="save">Submit Review</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["save"])) {
    $userReview = trim($_POST["review"]);

    // PHP Validation
    if (strlen($userReview) >= 20) {
        echo "<p class='message'>Thank you! Your review has been submitted.</p>";
    } else {
        echo "<p class='error'>Review must be at least 20 characters long.</p>";
    }
}
?>

</body>
</html>
