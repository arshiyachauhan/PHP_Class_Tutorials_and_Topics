<!-- Data Types and Variables-->
<?php
echo "<h1> Hello Vertos </h1>";
//concatenate 2 strings
echo " Welcome"." ","to Lpu <br>";
echo " Welcome"," ","to Lpu";

//creating a variable and concatenating
$greeting = "Hello";
$name= "Rahul";
echo "<h1>";
echo  $greeting . ", ". $name. "!";
echo "</h1>";

$number = ((10*2)-5)+3;
echo $number;
echo "<br>";

//dynamic variable (use $)
$varName = "color";
$varName= "blue";
$color= $varName;
echo $color;
echo "<br>";

//circumference 
define("Pi", 3.15159);
$r = 2;
echo 2*Pi*$r;

//swapping value
$a= 5;
$b =10;
echo "Before swapping: a = $a, b = $b <br>";
$temp = $a;
$a = $b;
$b = $temp;
echo "After swapping: a = $a, b = $b";

?>
