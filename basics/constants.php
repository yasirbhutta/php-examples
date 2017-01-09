<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Contants</title>
    </head>
    <body>
        <?php

        // define(name, value, case-insensitive)
        // case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
define("GREETING", "Welcome to Department of CS & IT!");

function myTest() {
	
	echo GREETING;
	
}

myTest();

?>
    
    </body>
</html>