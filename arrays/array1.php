<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Indexed Arrays</title>
    </head>
    <body>
    <?php
// index always starts at 0
$cars = array("Volvo", "BMW", "Toyota");

/*$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";*/

echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

//
// Get The Length of an Array count()
//

echo "<br>Number of elements" . count($cars);

//
// Loop through an index array
//

/*$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";*/

?>


    </body>
</html>