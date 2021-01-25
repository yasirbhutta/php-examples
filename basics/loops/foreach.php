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
$colors = array("red", "green", "blue", "yellow","pink");

foreach ($colors as $i) 

{

echo "<h1 style=". "background-color:$i>" . $i ."</h1><br>";
    
}
?>
    </body>
</html>