<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Functions</title>
    </head>
    <body>
    <?php
// Syntax
//
/*function functionName() {
    code to be executed;
}*/

//
// Example1
//
function writeMsg() {

    echo "Hello world!";

}

writeMsg(); // call the function

//
// Example2 - By Argument
//
 function familyName($fname) {
     echo "$fname Nasir" . "<br>";
 }

familyName("Muhammad"); // call
familyName("Ali");
familyName("Zeeshan");

// Example3 - By two arguments
//
//

function familyName($fname, $year) {
    echo "$fname. Born in $year <br>";
}

familyName("Muhammad Ali", "1975");
familyName("Muhammad Nasir", "1978");
familyName("Muhammad Hamza", "1983");*/

//
// Example 4 - Default Argument Value
//

function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

//
// Example 5 - Returning Values
//

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}
$i = sum(5, 10);
echo "5 + 10 = " . $i . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";

?>
    </body>
</html>