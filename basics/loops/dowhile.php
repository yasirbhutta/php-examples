<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Do While </title>
    </head>
    <body>
    <?php
/* do {
    code to be executed;
} while (condition is true); */
$x = 1; 

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

// example2
//do while loop would execute its statements at least once, even if the condition is false the first time.
//
/*$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);*/
?>

    </body>
</html>