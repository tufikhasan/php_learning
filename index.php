<?php
/* Variable, Anonymous, Callable, Closure & Arrow Functions In PHP
 *
In PHP, a variable function refers to the ability of a function name to be stored in a variable, just like any other value. This allows the function to be dynamically called based on the value stored in the variable.
 */

//========================= Variable function =====================

//01: function store in variable
function sum( int | float...$numbers ): int | float {
    return array_sum( $numbers );
}
$a = "sum";
echo $a( 1, 2, 3, 4 ) . "\n";

//Call the function if callable otherwise throw a message function not callable
$b = "sub";
if ( is_callable( $b ) ) {
    echo $b( 1, 2, 3, 4 ) . "\n";
} else {
    echo "This function not callable\n";
}