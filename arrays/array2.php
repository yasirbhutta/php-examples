<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Associative Arrays</title>
    </head>
    <body>
    <?php
//Associative arrays are arrays that use named keys that you assign to them.
$age = array("ahmad"=>"35", "ali"=>"37", "hamza"=>"43");

/*$age['ahmad'] = "35";

$age['ali'] = "37";

$age['hamza'] = "43";*/

echo "Ahmad is " . $age['ahmad'] . " years old.";
//
//Loop Through an Associative Array
//
/*foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}*/

//
// Example #2 Key() example
//
/*$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

// this cycle echoes all associative array
// key where value equals "apple"
while ($fruit_name = current($array)) {  // current() - Return the current element in an array
    if ($fruit_name == 'apple') {
        echo key($array).'<br />';
    }
    next($array); // next() - Advance the internal array pointer of an array
}*/
?>
    </body>
</html>