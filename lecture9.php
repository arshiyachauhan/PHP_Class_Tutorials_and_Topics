<!-- function scope: range where function accessible -->
 <?php
 //local variable - accessible only inside a block/func
 //global variable- access global variable inside a func using global keyword
 //static variable- variable should not be deleted after function call

//  //adding 2 numbers inside function using  $globals
 $a = 10;
 $b= 30;
function sum(){
    // using $globals to access values stored in variables a,b 
     $sum = $GLOBALS['a']+ $GLOBALS['b'];
     return $sum;

}
echo sum();


function staticvar() {
    static $a = 10; // Static variable retains its value across function calls
    $b = 20;        // Non-static variable, reinitialized on every function call
    $a++; // Increment $a, which will persist across calls
    $b++; // Increment $b, but it will reset to 20 on the next call
    echo "a: " . $a . "\n";  
    echo "b: " . $b . "\n"; 
}
staticvar(); // Output: a: 11, b: 21
staticvar(); // Output: a: 12, b: 21 (because $a is static and retains its value)



//create a function with name outer which contains a local variable with any message. Inside this func define inner function that tries to 
// access & modifies the value of variable. Display the value of variables from both functions. (nested func)
function outer($a){
    $a= "Hello";
    function inner(){
        $inner = $GLOBALS['a'];
        return $inner;

    }
    echo inner();
}



?>