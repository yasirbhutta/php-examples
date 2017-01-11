<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Switch</title>
    </head>
    <body>
    <?php
$favcolor = "yellow";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
    </body>
</html>