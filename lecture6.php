<?php
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

// Multidimensional associative array, calculate average grade for each student & display student name, subject grade & overall av grade
    $students =[
        "John" => [
            "Math" => 85,
            "Science" => 90,
            "History" => 78
        ],
        "Jane" => [
            "Math" => 92,
            "Science" => 88,
            "History" => 84
        ],
        "Alice" => [
            "Math" => 75,
            "Science" => 80,
            "History" => 70
        ]
        ];

    echo "<pre>";
    print_r($students);
    echo "</pre>";
    echo "<table border='2px'>";
    foreach($students as $key=>$val ){
        $sum=0;
        echo "<tr>";
        echo "<td> $val </td>";
        foreach($val as $key=>$val1){
            echo "<td> $val1 </td>";
        }
        
        echo "</tr>";
    }
    echo "</table>";


?>