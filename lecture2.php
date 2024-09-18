<?php
// taking user input
$fname= readline("Enter your name:\n");
$lname= readline("Enter your name 2:\n");
echo "Hello, $fname, $lname! Nice to meet you";

$a=readline("value of a:");
$b=readline("value of b:");
$c=readline("value of c:");
$d=readline("value of d:");
$e= readline("value of e: ");
$result=($a+ $b)*$c/$d - $e;
echo "$result";

$a= 40;
$a += 20;
echo ("$a");
echo "<br>";
$b =40;
$b -= 20;
echo "$b";
echo "<br>";
$c= 40;
$c /= 2;
echo "$c";
echo "<br>";
$d = 40;
$d *= 2;
echo "$d";
echo "<br>";

//ternary operator for finding eligibility for voting
$nationality = readline("Enter nationality: ");
$age = readline("Enter age: ");
$vote= ($nationality=="Indian" && $age>=18) ?"Eligible": "Not Eligible";
echo "$vote";

// Using ternary operator to find the maximum grade
$a= readline("Enter grade a: ");
$b= readline("Enter grade b: ");
$c= readline("Enter grade c: ");
$max = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);
echo "The maximum grade is: $max";

?>