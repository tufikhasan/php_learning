<?php
/* ********************* Default value of function parameter or optional parameter ************
 *
In PHP, default values for function parameters can be specified by assigning a value to the parameter in the function definition. If a value for the parameter is not provided when the function is called, the default value will be used instead.
 *
 * https://www.geeksforgeeks.org/how-to-create-optional-arguments-in-php/
 * https://www.php.net/manual/en/functions.arguments.php
 *
 */

//01: With out default value
function gamePlay( $name, $game ) {
    echo "{$name} is playing {$game}\n";
}
gamePlay( "Karim", "football" ); // Karim is playing football
// gamePlay(); //Fatal error
// gamePlay( "Karim" ); //Fatal error

//02: With default value
function makeFood( $name = "Coffee", $qty = "1 cup" ) {
    echo "Make {$qty} of {$name}\n";
};
makeFood(); //Make 1 cup of Coffee
makeFood( "Tea", "2 cups" ); //Make 2 cups of Tea
makeFood( "Mango Juice" ); //Make 1 cup of Mango Juice
makeFood( "2 cups" ); //Make 1 cup of 2 cups
