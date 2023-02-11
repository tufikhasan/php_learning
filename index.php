<?php
/* ********************* Recursion and Recursive Functions
 *
Recursion is a technique in computer programming where a function calls itself in order to solve a problem. It is a powerful tool that allows a programmer to break down a complex problem into smaller, manageable sub-problems.

A recursive function is a function that calls itself in order to solve a problem. The function repeatedly calls itself, each time with a simplified version of the original problem, until the problem can be solved without recursion. At this point, the function returns the solution to the original problem.

In PHP, a recursive function can be defined just like any other function. The only difference is that the function calls itself as part of its logic.
 *
 * https://www.geeksforgeeks.org/anonymous-recursive-function-in-php/
 */

//01:
function numberPrint( $n ) {
    if ( $n >= 10 ) {
        return;
    }
    echo $n . "\n";
    $n++;
    numberPrint( $n );
}
numberPrint( 5 );

echo PHP_EOL;

//02:
function numberPrintReversed( $n ) {
    if ( $n <= 0 ) {
        return;
    }
    echo $n . "\n";
    $n--;
    numberPrintReversed( $n );
}
numberPrintReversed( 5 );

echo PHP_EOL;

//03:
function numPrint( $start, $end ) {
    if ( $start > $end ) {
        return;
    }
    echo $start . "\n";
    $start++;
    numPrint( $start, $end );
}
numPrint( 1, 10 );

echo PHP_EOL;

//04:
function numPrint2( int $start, int $end, int $stepping = 1 ) {
    if ( $start > $end ) {
        return;
    }
    echo $start . "\n";
    $start += $stepping;
    numPrint2( $start, $end, $stepping );
}
numPrint2( 1, 10, 2 );
