<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- with get method information appears in url bar whereas it does not appear in post -->
    <!-- $_SERVER["PHP_SELF"]- used to display/print data on same page -->
    <form method ="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
        <label for= "name">Name</label>
        <input type="text" name="name" id="name"><br>
        <label for="name" >Password</label>
        <input type= "password" name="password" id="pw"><br>
        <input type="submit" name="save">
</form>

<?php
//super global variables- $_POST, $_GET, $_SERVER, $_REQUEST
//syntax- $_POST["name of attribute"]
if(isset($_POST["save"])){
    echo "Welcome ",$_POST["name"],"<br>", "Your Password is ",$_POST["password"];
}
?>        
    
</body>
</html>
