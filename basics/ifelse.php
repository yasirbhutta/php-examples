<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - The if...elseif....else Statement</title>   
    </head>
    <body>
    <?php
    /*

    Syntex

    if (condition) {
    code to be executed if this condition is true;
} elseif (condition) {
    code to be executed if this condition is true;
} else {
    code to be executed if all conditions are false;
}
*/

// i for Minutes with leading zero, s for Seconds with leading zero
echo "Minutes:" . date("i");
echo "<br> Seconds:" . date("s") . "<br>";
//
// if..elseif..elese
//
$t = date("H"); 

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
    </body>
</html>