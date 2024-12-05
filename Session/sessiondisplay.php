<?php
session_start();
echo "The session is being created <br>";
echo "The session value is ", $_SESSION["USERNAME"];
?>
<html>
    <body>
        <br>
        <a href="sessionlogout.php">Logout</a>
</body>
</html>