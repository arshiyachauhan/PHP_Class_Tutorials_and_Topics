<!-- Loops: execute same block of code again and again until a certain condition -->
<!-- while loop- check condition & then print statement
do while- execute code & then check the condition
forEach loop- in arrays -->

<?php
//Find sum of ten natural numbers using do while loop
$i =1;
$sum= 0;
do{
    $sum += $i;
    $i++;
}
while($i <= 10);
echo $sum;

//use nested loops to generate the given pattern
for($i=1; $i<=5; $i++){
    for($j=1;$j<=$i;$j++){
        echo $i;
    }
}

//find factorial of a number using while loop
$n = readline("Enter the the number:");
$factorial= 1;
while($n >0){
    $factorial *= $n;
    $n--;
}
echo $factorial;

//sum of 12345
$n =1;
$sum=0;
while($n<=5){
    $sum += $n;
    $n++;
}
echo $sum;

//reverse the order of digits in 12345
$rev= 0; 
$num= readline("num:");
while($num > 1) { 
    $rev = $rev * 10 + $num % 10; 
    $num = (int)$num / 10; 
} 
echo $rev; 

//Create the php script that generates a multiplicaion table for numbers from 1 to 10
for($i=1; $i<=10; $i++){
    for($j=1;$j<=10;$j++){
        echo $i*$j, " ";
    }
    echo "\n";
}

// Using while loop to find GCD (Greatest Common Divisor) of 2 numbers
$a = (int)readline("a = ");
$b = (int)readline("b = ");
while ($b != 0) {
    $temp = $b;
    $b = $a % $b;
    $a = $temp;
}
echo "GCD is " . $a . "\n";


//Arrays- stores group of values under a single variable,  in php we can store diff types of variables in one place
// Types of arrays in php:
// Indexed array: array with numeric key, Associative array: each key has its own value, Multidimensional array: 1 0r more array within array itself
// Structures- can store values of different data types

$color= array("red","green","blue","black");
$b = count($color);
echo $color[1];
echo $b;
for($i =0; $i<$b; $i++){
    echo $color[$i];
    echo " ";
}
echo "\n";
foreach($color as $c){
    echo $c;
    echo " ";
}

$color= array("c1"=>"red","c2"=>"green","c3"=>"blue","c4"=>"black");
foreach($color as $key=>$val){
    echo "The key is: ", $key, " the value is: ", $val;
    echo "\n";
    echo $key, " => ",$val;
}

$color= array("c1"=>"red","c2"=>"green","c3"=>"blue","c4"=>"black");
echo $color["c2"]; //access single element

?>