<?php
/* ********************* Fixing function return type ************
 *
In PHP, the return type of a function specifies the type of value that the function returns. It can be used to enforce type safety and improve code readability.

The return type of a function is specified using the ':' operator, followed by the type name, before the opening brace '{' of the function body.
 *
 * https://www.php.net/manual/en/functions.returning-values.php
 *
 */

//01:
function sum( $x, $y ): int {
    return $x + $y;
}
echo sum( 2, 3 ) . "\n";

//03:
function gamePlay( $name, $game ): string {
    return "{$name} is playing {$game}\n";
}
echo gamePlay( "Karim", "football" ); // Karim is playing football

//02: Fatal error-> Uncaught TypeError: sub(): Return value must be of type int
function sub( $x, $y ): int {
    return "ABC";
}
echo sub( 2, 3 ) . "\n";
