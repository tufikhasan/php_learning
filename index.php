<?php
/* PHP 8: named arguments
 *
 * Named arguments is a feature that was introduced in PHP 8, which allows you to specify the arguments in a function call by name, rather than relying on the order in which they are defined in the function signature.
 *
 *
 * https://www.php.net/manual/en/functions.arguments.php
 * https://www.w3schools.com/php/php_looping_foreach.asp
 */

//01:
function printName( $firstName, $lastName ) {
    echo "Hello ! {$firstName} {$lastName}\n";
}
printName( lastName:"Sabbir", firstName:"Ahammed" );

echo "\n";

//02:
function printName2( $firstName = "Rakib", $lastName = "khan" ) {
    echo "Hello ! {$firstName} {$lastName}\n";
}
printName2( lastName:"Sheikh", );
printName2( lastName:"Hasan", firstName:"Tufik" );

echo "\n";

//03:
function printName3( $firstName = "Rakib", $lastName = "khan" ) {
    echo "Hello ! {$firstName} {$lastName}\n";
}
printName2( $lastName = "Sheikh", );
printName2( $lastName = "Hasan", $firstName = "Tufik" );
