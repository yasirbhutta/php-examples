<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Contants</title>
    </head>
    <body>
        <?php

        // define(name, value, case-insensitive)
        // case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
	
	echo GREETING;
	
}

myTest();

?>
    
    </body>
</html>