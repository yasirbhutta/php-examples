<?php
$x = 5; // global scope
$y = 10;

function myTest() {
 global $x, $y;  // use global scope variable in function
    $y = $x + $y;
    
}

myTest();
echo $y; // outputs 15
?>