<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP String Functions</title>
    </head>
    <body>
    <!--PHP String Functions-->
    <!--Get The Lenght of a String-->
    <?php
    echo "Length of a String: ";
    echo strlen("Hello world!"); // outputs 12
?>
    <!--Count The Number of Words in a String-->
    <?php
    echo "<br /> Count Words: ";
    echo str_word_count("Hello world!"); // outputs 2
?>
    <!--Reverse a String-->
    <?php
    echo "<br />Reverse a String: ";
    echo strrev("Hello world!"); // outputs !dlrow olleH
?>
    <!--Search For a Specific Text Within a String-->
    <?php
    echo "<br />Position: ";
    echo strpos("Hello world!", "world"); // outputs 6
?>
    <!--Replace Text Within a String-->
    <?php
    echo "<br />Replace: ";
    echo str_replace("world", "PHP", "Hello world!"); // outputs Hello Dolly!
?>
    </body>
</html>