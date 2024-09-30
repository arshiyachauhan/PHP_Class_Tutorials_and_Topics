<?php
//sorting array- rsort(reverse sort) & asort(ascending order)
//ksort-for key value pairs & krsort-reverse for key value pairs
$arr= array("Sophia" => "31", "Jacob"=>"41","William"=>"39","Ramesh"=>"40");
//value wise
asort($arr);
print_r($arr);
arsort($arr);
print_r($arr);
//key wise
ksort($arr);
print_r($arr);
krsort($arr);
print_r($arr);

//Array functions
//array_combine()- forms an associative array after combining given arrays
$name= array("Manoj","Rahul","Aneesh");
$marks= array("75","89","44");
$c= array_combine($name,$marks);
print_r($c);

//array_chunk()- forms arrays of the given size from already given array
$courses= array("PHP","CSS","HTML","Nodejs","DSA","React");
print_r(array_chunk($courses,2));//creates 3 arrays of 2 size

//array_count_values()- counts all values of array
$food= array(
    "fruits"=> array("orange","apple","kiwi","kiwi"),
    "veg"=> array("brinjal","capsicum","spinach")
);
print_r(array_count_values($food['fruits']));
print_r(array_count_values($food['veg']));

//array_diff()- to compare two different arrays, will check all array and returns all entries from array1 that are not in other
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"black");
$a2= array("e"=>"red","f"=>"green","g"=>"blue");
$result= array_diff($a1, $a2);
print_r($result);

//array_flip()- flips all keys with their associated values in arrray
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);

//array_intersect()- returns common values after comparing 2 or more arrays
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2= array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("red","blue");
$result= array_intersect($a1,$a2,$a3);
print_r($result);

//array_merge()- merges 2 or more arrays into 1
$a1=array("a"=>"red","b"=>"green");
$a2= array("c"=>"blue","d"=>"yellow");
$a3= array("c"=>"orange","b"=>"magenta");
print_r(array_merge($a1,$a2,$a3));// 1 value at once only updating same key with values with the last allocated one
$a1=array("blue","green","orange");
$a2=array("green","yellow","red");
print_r(array_merge($a1,$a2));//here all values are merged in indexed array

// array_pop()- deletes last element
$a= array("red","green","blue");
array_pop($a);
print_r($a);
array_push($a, "black","orange");
print_r($a);
array_shift($a);
array_unshift($a,4);
print_r($a);

//array_reverse()- returns array in reverse order
// array_search()- search array for value & returns key
// in_array()- returns 1 if element is present and 0 if not
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a1);
echo array_search("red",$a1, true);//strict array- adding true 

// array_slice()- returns selected parts of an array
// array_column()-extract a particular value from single column

// export()- convert string to array
// import()- array to string
$a= "Hello have a nice day";
$c= export( " ",$a);
print_r($c);

?>