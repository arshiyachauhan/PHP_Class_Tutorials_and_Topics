<?php
    //write a script that will display the given string using given array:
    $color= array("white","green","red","blue","black");
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the ", $color[2]," carpet, the "
    ,$color[1]," lawn, the ", $color[0]," house, the leaden sky. The new president and his first lady.";

    //creating list out of array
    $color= array("white","green","red");
    echo "<ul>";
    echo "<li> $color[0] </li>";
    echo "<li> $color[1] </li>";
    echo "<li> $color[2] </li>";
    echo "</ul>";

    //creating a associative array of students and their scores
    $arr= array("Neha"=>"80","Alice"=>"90","Charlie"=>"92","Alisha"=>"88","Rohan"=>"52");
    $sum = 0;
    foreach($arr as $key => $value) {
        $sum += $value;
    }
    $average= $sum/count($arr);
    echo "Average marks:", $average;
    echo "\n";
    echo "Students scoring above average: \n";
    foreach($arr as $key => $val ){
        if($val > $average){
            echo $key,": ", $val;
            echo "\n";
        }
    }

    // filter out even array, square remaining odd array, sort squared array in descending order, calculate sum of it
    $arr=[3,7, 2, 8, 1, 4, 10, 5];
    $oddNum = [];
    foreach($arr as $num){
        if($num%2 !==0){
            $oddNum[] = $num;
        }
    }
    $squaredNum = [];
    foreach($oddNum as $num){
        $squaredNum[] = $num*$num;
    }
    rsort($squaredNum);//for sorting array in descending order
    $sum=0;
    foreach($squaredNum as $num){
        $sum += $num;
    }
    echo "Squared array: ";
    print_r($squaredNum);
    echo "\nSum: ",$sum;

    //MULTIDIMENSIONAL ARRAY- array inside array
    $result= array(
        array("Manoj",7.8,"pass"),
        array("Anuj",8.9,"pass"),
        array("Aditya",4.9,"fail")
    );
    echo "<pre>";
    print_r($result);//to access the location of array
    echo "</pre>";
    // echo "<br>";
    echo "<table border='2px'>";
    echo "<tr> <th> Name </th>
    <th> cgpa </th> <th> Status </th> </tr>";
    foreach($result as $res){
        echo "<tr>";
        foreach($res as $r1){
            echo "<td> $r1 </td> ";
        }
        echo "</tr>";
    }
    echo "</table>";


?>