<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - foreach</title>
    </head>
    <body>
    <?php
/*foreach ($array as $value) {
    code to be executed;
}*/
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo "$value <br>";
}
?>
    </body>
</html>