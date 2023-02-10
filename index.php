<?php
/* What are functions and how to write them
 * In PHP, a function is a block of code that can be reused multiple times in a program. Functions are defined using the "function" keyword, followed by a function name and a set of parentheses that may include parameters. Functions can optionally return a value to the calling code using the "return" statement.
 *
 * https://www.w3schools.com/php/php_functions.asp
 * https://www.php.net/manual/en/functions.user-defined.php
 */

//************** even number check function **************

//01: simple function
function isEvenOrOdd( $num ) {
    if ( $num % 2 == 0 ) {
        echo "$num is an Even";
    } else {
        echo "$num is an Odd";
    }
}
isEvenOrOdd( 3 );

echo PHP_EOL;

//02: Reuseable function
function EvenOrOdd( $n ) {
    if ( $n % 2 == 0 ) {
        return true;
    } else {
        return false;
    }
}
$x = 5;
if ( EvenOrOdd( $x ) ) {
    echo "{$x} is an Even number";
} else {
    echo "{$x} is an Odd number";
}

echo PHP_EOL;

//03: Reuseable function - WHEN return don't need to use else statement
function isEven( $n ) {
    if ( $n % 2 == 0 ) {
        return true;
    }
    return false;
}
$x = 8;
if ( isEven( $x ) ) {
    echo "{$x} is an Even number";
} else {
    echo "{$x} is an Odd number";
}