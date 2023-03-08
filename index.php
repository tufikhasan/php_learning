<?php
/* $GLOBALS — References all variables available in global scope

 * https://www.php.net/manual/en/reserved.variables.globals.php
 * https://www.w3schools.com/php/php_superglobals_globals.asps
 * https://www.geeksforgeeks.org/php-superglobals/
 */

//01
$x = 75;
$y = 25;
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;

//02
function getName() {
    $name = "Towfik";
    echo "Global name = {$GLOBALS['name']}\n";
    echo "Local name = {$name}\n";
}
$name = "Rakib Hasan";
getName();
