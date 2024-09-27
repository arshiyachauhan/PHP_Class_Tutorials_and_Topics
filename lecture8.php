<?php
//FUNCTIONS - self-contained block of code that performs a specific task, handle errors at 1 place
function fullname($fname, $lname){
    echo "$fname $lname";
}
fullname("Arshiya", "Chauhan");

function add(float $a, float $b){
    return (int)($a+ $b);
}
echo add(1.2,5.2);

function add1(float $a, float $b){
    return $a+ $b;
}
echo add1(1.2,5.2);

//Function to calculate area of different shapes
$inp= readline("Enter shape type: ");
if($inp == "rect"){
$length= readline("l: ");
$width= readline("w: ");
function rect($length, $width){
    return ($length* $width);
}
echo rect($length, $width);
}
else if($inp == "triangle" ){
$base= readline("b: ");
$height= readline("h: ");
function triangle($base, $height){
    return(1/2* $base *$height);
}
echo triangle($base, $height);

}
else if($inp == "circle"){
$radi= readline("r: ");
function circle($radi){
    return(2* 3.14 * $radi);
}
echo ($radi);
}
else{
    echo "invalid shape";
}

//Library Fine calculation
$day= readline("Enter number of days:");
function calculateFine($day){
    if($day <= 5){
        return 1*$day;
    }
    else if($day <=10){
        return 2* $day;
    }else{
        return 5*$day;
    }
}
echo calculateFine($day);

//BMI calculator
$weight = readline("Enter weight (in kg): ");
$height = readline("Enter height (in meters): ");

function calculateBMI($weight, $height) {
    $bmi = $weight / ($height * $height);
    return $bmi;
}
$bmi = calculateBMI($weight, $height);
echo "Your BMI is: " . round($bmi, 2) . "\n";
if ($bmi < 18.5) {
    echo "Category: Underweight\n";
} elseif ($bmi >= 18.5 && $bmi <= 24.9) {
    echo "Category: Healthy Weight\n";
} elseif ($bmi >= 25.0 && $bmi <= 29.9) {
    echo "Category: Overweight\n";
} else {
    echo "Category: Obesity\n";
}

//Bill Splitting for group dinner
function calculateBillSplit($totalBill, $peopleCount) {
    return round($totalBill / $peopleCount, 2); 
}
$totalBill = (float) readline("Enter the total bill amount: ₹");
$peopleCount = (int) readline("Enter the number of people: ");
echo "Each person needs to pay: ₹" . calculateBillSplit($totalBill, $peopleCount) . "\n";

//call by reference- concerned with address, changes value entirely
//call by value- 
//Swap function using call by reference
$a= readline("a: ");
$b= readline("b: ");
echo "The value before swapping $a and $b. \n";
function swapping(&$a, &$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
    return "The value after swapping $a and $b.";
}
echo swapping($a,$b);

//String manipulation using call by value
$string= readline("enter string: ");
$suffix= readline("suffix: ");
function addSuffix($string){
    return $string + $suffix;
}
echo addSuffix($string);

//Convert farenheit to celcius. pass temp by reference and demonstrate that original temp remains changed
$fahrenheit = readline("Enter temperature in Fahrenheit: "); 
function FahrenheitToCelsius(&$fahrenheit) {
    $celsius = ($fahrenheit - 32) * 5/9;
    return $celsius;
}
$celsius = FahrenheitToCelsius($fahrenheit);
echo "Temperature in Celsius: " . round($celsius, 2) . "°C\n";

//string palindrome checker- implement logic manually without using built-in string reversal functions
function isPalindrome($string) {
    $string = strtolower(str_replace(' ', '', $string));
    $reversedString = strrev($string);
    
    if ($string === $reversedString) {
        return true;  // It's a palindrome
    } else {
        return false;  // It's not a palindrome
    }
}
$input = readline("Enter a string to check for palindrome: ");
if (isPalindrome($input)) {
    echo "$input is a palindrome.\n";
} else {
    echo "$input is not a palindrome.\n";
}


?>
