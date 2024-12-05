<?php
session_start();
?>
<html lang= "en">
    <body>
    <h2>Enter Username and Password</h2>
    <?php
    $msg= '';
    if(isset($_POST['login'])&& !empty($_POST['username']) && !empty($_POST['password']))
    {
        if($_POST['username'] == 123 && $_POST['password'] == 123)
        {
            $_SESSION['username']= 123;
            echo 'You have entered a valid username and password';
        }else{
            $msg= 'Wrong username  or password';
        }
    }
    ?>
<form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method= "post">
Username: <input type= "text" name= "username"></br><br>
Password: <input type="password" name="password"><br>
<button type= "submit" name= "login">Login</button>
<h4><?php echo $msg; ?> </h4>
</form>
<a href= "myprofile.php">My Profile</a>
<a href="sessionlogout.php">Logout</a>
</body>
</html>