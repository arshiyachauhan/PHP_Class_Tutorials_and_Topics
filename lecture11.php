<!-- String Functions: Used to manipulate string values -->
<?php
    // strtolower() - Converts a string to lowercase
    $string = "Hello World!";
    echo strtolower($string); // hello world!

    // strtoupper() - Converts a string to uppercase
    $string = "Hello World!";
    echo strtoupper($string); // HELLO WORLD!

    // strlen() - Returns the length of a string
    $string = "Hello World!";
    echo strlen($string); // 12

    // implode() - Join array elements with a string
    $array = array("Hello", "World!");
    echo implode(" ", $array); // Hello World!

    // explode() - Breaks a string into an array
    $string = "Hello World!";
    print_r(explode(" ", $string)); // Array ( [0] => Hello [1] => World! )

    // substr() - Returns a part of a string
    $string = "Hello World!";
    echo substr($string, 6); // World!
    echo substr($string, 6, 3); // Wor

    // str_replace() - Replaces some characters in a string
    $string = "Hello World!";
    echo str_replace("World", "PHP", $string); // Hello PHP!

    // strpos() - Searches for a specific text within a string
    $string = "Hello World!";
    echo strpos($string, "World"); // 6
?>

<!-- Implode Working -->
<?php
    $a = ["green", "red", "blue"];
    echo implode(", ", $a); // green, red, blue
    // implode(separator, array)
    // separator - Optional. Specifies what to put between the array elements. Default is "".
    // array - Required. The array to join to a string
?>

<!-- Explode Working -->
<?php
    $string = "Hello How are you";
    print_r(explode(" ", $string)); // Array ( [0] => Hello [1] => How [2] => are [3] => you )
    print_r(explode(" ", $string, 2)); // Array ( [0] => Hello [1] => How are you )
    print_r(explode(" ", $string, 4)); // Array ( [0] => Hello [1] => How [2] => are [3] => you )
    // Explode function breaks the string into an array
    // explode(separator, string, limit)
    // separator - Required. Specifies where to break the string
    // string - Required. The string to break
    // limit - Optional. Specifies the number of array elements to return
?>

<!-- INCLUDE Keyword using Variable of one file in other -->
<?php
    include 'PHP-Class9.php';
    echo $globalVar;
?>
