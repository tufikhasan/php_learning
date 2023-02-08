<?php
/* PHP Foreach loop
 * The foreach loop in PHP is a control structure that allows you to iterate over arrays and objects, and execute a block of code for each element in the array or object.
 * Where condition is a boolean expression that determines whether to continue or end the loop. The code inside the loop will be executed, and then the condition will be evaluated. If the condition is true, the loop will repeat; if the condition is false, the loop will terminate.

 * https://www.php.net/manual/en/control-structures.foreach.php
 * https://www.w3schools.com/php/php_looping_foreach.asp

 */
//01:
$colors = array( "red", "green", "blue", "yellow" );

foreach ( $colors as $value ) {
    echo "{$value}\n";
}

echo "\n";

//02:
$age = array( "Peter" => "35", "Ben" => "37", "Joe" => "43" );

foreach ( $age as $x => $val ) {
    echo "My name is {$x}. I am $val years old\n";
}