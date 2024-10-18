<!-- Cookie - a temporary file to store small data of the user, info of cookie is stored at the client end-->
 <?php
 setcookie('user','cooki1', time()+60,'/');
 ?>
 <html>
    <body>
        <?php
        if(isset($_COOKIE['user']))
        {
            echo "the cookie with name: ",$_COOKIE['user'], "is set";//for accessing cookie
        }
        else{
            echo "Cookie is not set; ";
        }
        ?>
        </body>
        </html>
