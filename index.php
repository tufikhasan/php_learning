<?php
/* ********************* Accepting Unlimited Arguments in Functions ************
 *
The spread operator (also known as the splat operator) in PHP is denoted by '...', and is used to unpack arrays and Traversable objects into individual elements as function arguments.

The spread operator allows you to pass an array or a Traversable object as separate arguments to a function, instead of passing the entire array or object as a single argument.
 *
 * https://www.php.net/manual/en/migration56.new-features.php
 *
 */

//01:
function addNumbers( int...$numbers ) {
    $sum = 0;
    foreach ( $numbers as $number ) {
        $sum += $number;
    }
    return $sum;
}

$result = addNumbers( 1, 2, 3, 4, 5 );
var_dump( $result ); // Output: int(15)

//02:
function sum( int...$num ): int {
    $result = 0;
    for ( $i = 0; $i < count( $num ); $i++ ) {
        $result += $num[$i];
    }
    return $result;
}
echo sum( 1, 2, 3, 4 ) . "\n";

//02:
function sum2( $a, $b, int...$num ): int {
    $result = 0;
    for ( $i = 0; $i < count( $num ); $i++ ) {
        $result += $num[$i];
    }
    return $result;
}
echo sum2( 5, 6, 1, 2, 3, 4 ) . "\n";
