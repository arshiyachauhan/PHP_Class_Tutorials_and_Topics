<!-- a session stores data on the server rather than on user's computer, user identified on unique number (session identoifier or SID) -->
 <?php
 session_start();
 $_SESSION["USERNAME"]="JASSI";
 ?>
 <html>
    <body>
        <?php
        if(isset($_SESSION["USERNAME"]))
        {
            echo "the session is created by ", $_SESSION["USERNAME"];
        }
        else{
            echo "The session is not set ";
        }
        ?>
        <br>
        <a href= "sessiondisplay.php">Display session</a>
    </body>
    </html>

