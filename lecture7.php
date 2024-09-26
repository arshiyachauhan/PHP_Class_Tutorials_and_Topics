<!-- Loop through an Indexed Array (for loop) -->

<?php
$colors = array("Red", "Green", "Blue", "Yellow");
$arrlength = count($colors);

for($x = 0; $x < $arrlength; $x++) {
    echo $colors[$x];
    echo " ";
}
?>

<!-- Output : Red Green Blue Yellow  -->

<!-- Loop through an Associative Array (foreach loop) -->

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo " ";
}
?>

<!-- Output : Key=Peter, Value=35 Key=Ben, Value=37 Key=Joe, Value=43  -->

<!-- Multi-dimensional arrays -->
<!-- A multidimensional array is an array containing one or more arrays. It is possible to store arrays in an array. -->

<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2]."\n";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2]."\n";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2]."\n";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2]."\n";
?>

<!-- Output : Volvo: In stock: 22, sold: 18 BMW: In stock: 15, sold: 13 Saab: In stock: 5, sold: 2 Land Rover: In stock: 17, sold: 15  -->

<!-- Loop through a multidimensional array (foreach loop) -->

<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

for ($row = 0; $row < 4; $row++) {
    echo "Row number $row \n";
    for ($col = 0; $col < 3; $col++) {
        echo "- ".$cars[$row][$col]." \n";
    }
}
?>

<!-- Output : Row number 0 Volvo 22 18 Row number 1 BMW 15 13 Row number 2 Saab 5 2 Row number 3 Land Rover 17 15  -->

<!-- Making a Table -->

<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Company</th><th>In Stock</th><th>Sold</th></tr>";

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

for ($row = 0; $row < 4; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 3; $col++) {
        echo "<td>".$cars[$row][$col]."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>