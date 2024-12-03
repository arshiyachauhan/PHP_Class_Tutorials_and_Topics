<?php
$errname=" ";
if(isset($_POST["save"])){
    if(empty($_POST['name'])){
        $errname= "name is required";
    }else{
    echo "The name is ",$_POST["name"];
    }
}
//add php script above html
?> 

<!-- email-validation- (!filter_var($_POST['email'])) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- htmlspecialchars()- used to protect data from attackers, enclose $_SERVER['PHP_SELF'], replace html special characters with html entity -->
    <form method ="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
        UserName:
        <input type="text" name="name" >
        <!-- applying validatiopn for required field -->
        <span style="color: red">*<?php echo $errname; ?></span>
        <br>
        Email:
        <input type="email" name ="">
        <input type="submit" name="save">
</form>
</body>
</html>
