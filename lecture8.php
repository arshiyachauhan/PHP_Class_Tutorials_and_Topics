<?php
//FUNCTIONS - self-contained block of code that performs a specific task, handle errors at 1 place
// function fullname($fname, $lname){
//     echo "$fname $lname";
// }
// fullname("Arshiya", "Chauhan");

// function add(float $a, float $b){
//     return (int)($a+ $b);
// }
// echo add(1.2,5.2);

// function add1(float $a, float $b){
//     return $a+ $b;
// }
// echo add1(1.2,5.2);

//Function to calculate area of different shapes
// $inp= readline("Enter shape type: ");
// if($inp == "rect"){
// $length= readline("l: ");
// $width= readline("w: ");
// function rect($length, $width){
//     return ($length* $width);
// }
// echo rect($length, $width);
// }
// else if($inp == "triangle" ){
// $base= readline("b: ");
// $height= readline("h: ");
// function triangle($base, $height){
//     return(1/2* $base *$height);
// }
// echo triangle($base, $height);

// }
// else if($inp == "circle"){
//$radi= readline("r: ");
// function circle($radi){
//     return(2* 3.14 * $radi);
// }
// echo ($radi);
// }
// else{
//     echo "invalid shape";
// }

//Library Fine calculation
// $day= readline("Enter number of days:");
// function calculateFine($day){
//     if($day <= 5){
//         return 1*$day;
//     }
//     else if($day <=10){
//         return 2* $day;
//     }else{
//         return 5*$day;
//     }
// }
// echo calculateFine($day);

//BMI calculator
// $weight= readline("Enter weight (in kg) : ");
// $height= readline("Enter height (in meters) : ");
// function calculatebmi($weight, $height){
//     $bmi= $weight/($height*$height);
//     return $bmi;
// }
// echo calculatebmi($weight, $height);
// Underweight (Below 18.5) • Healthy Weight (18.5 - 24.9) • Overweight (25.0 - 29.9) • Obesity (30.0 and Above)

//Bill Splitting for group dinner

//call by reference- concerned with address, changes value entirely
//call by value- 
//Swap function using call by reference
// $a= readline("a: ");
// $b= readline("b: ");
// echo "The value before swapping $a and $b. \n";
// function swapping(&$a, &$b){
//     $temp=$a;
//     $a=$b;
//     $b=$temp;
//     return "The value after swapping $a and $b.";
// }
// echo swapping($a,$b);

//String manipulation using call by value
// $string= readline("enter string: ");
// $suffix= readline("suffix: ");
// function addSuffix($string){
//     return $string + $suffix;
// }
// echo addSuffix($string);

//Convert farenheit to celcius. pass temp by reference and demonstrate that original temp remains changed
// $celcius= readline("temp in F: ");
// function FarenheitToCelcius(&$celcius){
//     return

//string palindrome checker- implement logic manually without using built-in string reversal functions
// function isPalindrome($string){

// }

?>